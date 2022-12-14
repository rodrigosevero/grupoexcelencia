@extends('layouts.admin')
@section('content')
@can('option_create')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.options.create") }}">
            {{ trans('global.add') }} {{ trans('cruds.option.title_singular') }}
        </a>
    </div>
</div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.option.title_singular') }} {{ trans('global.list') }}
    </div>




    <div class="card-body">

        <div class="form-group">
            <label class="required" for="question_id">Selecione uma questão: </label>
            <select class="form-control select2 {{ $errors->has('question') ? 'is-invalid' : '' }}" name="question_id" id="question_id" required onchange="javascript:location.href = this.value;">
                @foreach($questions as $id => $question)
                <option value="?id={{ $id }}" {{ old('question_id') == $id ? 'selected' : '' }}>{{ $question }}</option>
                @endforeach
            </select>
            @if($errors->has('question_id'))
            <div class="invalid-feedback">
                {{ $errors->first('question_id') }}
            </div>
            @endif
            <span class="help-block">{{ trans('cruds.option.fields.question_helper') }}</span>
        </div>

        @if (@$_GET['id'])
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Option">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.option.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.option.fields.question') }}
                        </th>
                        <th>
                            {{ trans('cruds.option.fields.option_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.option.fields.points') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($options as $key => $option)
                    <tr data-entry-id="{{ $option->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $option->id ?? '' }}
                        </td>
                        <td>
                            {{ $option->question->question_text ?? '' }}
                        </td>
                        <td>
                            {{ $option->option_text ?? '' }}
                        </td>
                        <td>
                            {{ $option->points ?? '' }}
                        </td>
                        <td>
                            @can('option_show')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.options.show', $option->id) }}">
                                {{ trans('global.view') }}
                            </a>
                            @endcan

                            @can('option_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.options.edit', $option->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                            @endcan

                            @can('option_delete')
                            <form action="{{ route('admin.options.destroy', $option->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                            @endcan

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function() {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('option_delete')
        let deleteButtonTrans = '{{ trans('
        global.datatables.delete ') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.options.massDestroy') }}",
            className: 'btn-danger',
            action: function(e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function(entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('
                        global.datatables.zero_selected ') }}')

                    return
                }

                if (confirm('{{ trans('
                        global.areYouSure ') }}')) {
                    $.ajax({
                            headers: {
                                'x-csrf-token': _token
                            },
                            method: 'POST',
                            url: config.url,
                            data: {
                                ids: ids,
                                _method: 'DELETE'
                            }
                        })
                        .done(function() {
                            location.reload()
                        })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        $.extend(true, $.fn.dataTable.defaults, {
            order: [
                [1, 'desc']
            ],
            pageLength: 100,
        });
        $('.datatable-Option:not(.ajaxTable)').DataTable({
            buttons: dtButtons
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })
</script>
@endsection
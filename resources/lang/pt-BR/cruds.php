<?php

return [
    'userManagement' => [
        'title'          => 'Gerenciamento de usuários',
        'title_singular' => 'Gerenciamento de usuário',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Senha',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'question'       => [
        'title'          => 'Questões',
        'title_singular' => 'Questão',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'category'             => 'Categoria',
            'category_helper'      => '',
            'question_text'        => 'Question Text',
            'question_text_helper' => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'option'         => [
        'title'          => 'Options',
        'title_singular' => 'Option',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'question'           => 'Question',
            'question_helper'    => '',
            'option_text'        => 'Option Text',
            'option_text_helper' => '',
            'points'             => 'Points',
            'points_helper'      => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'result'         => [
        'title'          => 'Results',
        'title_singular' => 'Result',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'user'                => 'User',
            'user_helper'         => '',
            'total_points'        => 'Total Points',
            'total_points_helper' => '',
            'questions'           => 'Questions',
            'questions_helper'    => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
];
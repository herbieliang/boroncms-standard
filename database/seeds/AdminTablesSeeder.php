<?php

namespace Database\Seeds;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "Index",
                    "icon" => "feather icon-bar-chart-2",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 2,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "Admin",
                    "icon" => "feather icon-settings",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "parent_id" => 2,
                    "order" => 3,
                    "title" => "Users",
                    "icon" => "",
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 4,
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "Roles",
                    "icon" => "",
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 5,
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "Permission",
                    "icon" => "",
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 6,
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "Menu",
                    "icon" => "",
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 7,
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "Extensions",
                    "icon" => "",
                    "uri" => "auth/extensions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 8,
                    "parent_id" => 11,
                    "order" => 9,
                    "title" => "Setting",
                    "icon" => "",
                    "uri" => "/setting",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 9,
                    "parent_id" => 0,
                    "order" => 10,
                    "title" => "Slide",
                    "icon" => "fa-industry",
                    "uri" => "",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 10,
                    "parent_id" => 9,
                    "order" => 11,
                    "title" => "Slide category",
                    "icon" => "",
                    "uri" => "/slide-category",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 11,
                    "parent_id" => 0,
                    "order" => 8,
                    "title" => "Website",
                    "icon" => "fa-internet-explorer",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-02 17:19:55",
                    "updated_at" => "2020-12-02 17:20:10"
                ],
                [
                    "id" => 12,
                    "parent_id" => 9,
                    "order" => 12,
                    "title" => "Slide",
                    "icon" => NULL,
                    "uri" => "/slide",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2020-12-02 17:22:49",
                    "updated_at" => "2020-12-02 17:22:49"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "Auth management",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 2,
                    "name" => "Users",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 3,
                    "name" => "Roles",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 4,
                    "name" => "Permissions",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 5,
                    "name" => "Menu",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 6,
                    "name" => "Extension",
                    "slug" => "extension",
                    "http_method" => "",
                    "http_path" => "/auth/extensions*",
                    "order" => 6,
                    "parent_id" => 1,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "id" => 7,
                    "name" => "Setting",
                    "slug" => "setting",
                    "http_method" => "",
                    "http_path" => "/setting*",
                    "order" => 8,
                    "parent_id" => 11,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:11:09"
                ],
                [
                    "id" => 8,
                    "name" => "Slide management",
                    "slug" => "slide-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 9,
                    "parent_id" => 0,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:11:09"
                ],
                [
                    "id" => 9,
                    "name" => "Slide category",
                    "slug" => "slide-category",
                    "http_method" => "",
                    "http_path" => "/slide-category*",
                    "order" => 10,
                    "parent_id" => 8,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => "2020-12-02 17:11:10"
                ],
                [
                    "id" => 10,
                    "name" => "Slide",
                    "slug" => "slide",
                    "http_method" => "",
                    "http_path" => "/slide*",
                    "order" => 11,
                    "parent_id" => 8,
                    "created_at" => "2020-12-02 17:07:06",
                    "updated_at" => "2020-12-02 17:11:10"
                ],
                [
                    "id" => 11,
                    "name" => "Website management",
                    "slug" => "website-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 7,
                    "parent_id" => 0,
                    "created_at" => "2020-12-02 17:10:57",
                    "updated_at" => "2020-12-02 17:11:09"
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "Administrator",
                    "slug" => "administrator",
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ]
            ]
        );

        Models\Setting::truncate();
		Models\Setting::insert(
			[

            ]
		);

		Models\Extension::truncate();
		Models\Extension::insert(
			[

            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[

            ]
		);

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
		DB::table('admin_permission_menu')->insert(
			[
                [
                    "permission_id" => 7,
                    "menu_id" => 8,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 7,
                    "menu_id" => 11,
                    "created_at" => "2020-12-02 17:19:55",
                    "updated_at" => "2020-12-02 17:19:55"
                ],
                [
                    "permission_id" => 9,
                    "menu_id" => 9,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 9,
                    "menu_id" => 10,
                    "created_at" => "2020-12-01 15:31:04",
                    "updated_at" => NULL
                ],
                [
                    "permission_id" => 10,
                    "menu_id" => 12,
                    "created_at" => "2020-12-02 17:22:49",
                    "updated_at" => "2020-12-02 17:22:49"
                ]
            ]
		);

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}

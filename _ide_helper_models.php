<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\EmailTemplate
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $content
 * @property string $name
 * @property string $subject
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate whereUpdatedAt($value)
 */
	class EmailTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Example
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property int $status_id
 * @property-read \App\Models\Status $status
 * @method static \Illuminate\Database\Eloquent\Builder|Example newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Example newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Example query()
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereUpdatedAt($value)
 */
	class Example extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Folder
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int|null $folder_id
 * @property int|null $resource
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder query()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereFolderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereResource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereUpdatedAt($value)
 */
	class Folder extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Form
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $table_name
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property int $delete
 * @property int $pagination
 * @method static \Illuminate\Database\Eloquent\Builder|Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form wherePagination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereUpdatedAt($value)
 */
	class Form extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FormField
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $type
 * @property int $browse
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property string|null $relation_table
 * @property string|null $relation_column
 * @property int $form_id
 * @property string $column_name
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRelationColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRelationTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereUpdatedAt($value)
 */
	class FormField extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HeaderNav
 *
 * @property int $id
 * @property string $name
 * @property string $link_url
 * @property int $is_dropdown
 * @property int|null $parent_id
 * @property int $show
 * @property int $edit
 * @property int $delete
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|HeaderNav[] $sub_items
 * @property-read int|null $sub_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereIsDropdown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereLinkUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderNav whereUpdatedAt($value)
 */
	class HeaderNav extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menulist
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist whereName($value)
 */
	class Menulist extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menurole
 *
 * @property int $id
 * @property string $role_name
 * @property int $menus_id
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereMenusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereRoleName($value)
 */
	class Menurole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menus
 *
 * @property int $id
 * @property string $name
 * @property string|null $href
 * @property string|null $icon
 * @property string $slug
 * @property int|null $parent_id
 * @property int $menu_id
 * @property int $sequence
 * @method static \Illuminate\Database\Eloquent\Builder|Menus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereHref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereSlug($value)
 */
	class Menus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notes
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $note_type
 * @property string $applies_to_date
 * @property int $users_id
 * @property int $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Status $status
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\NotesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereAppliesToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereNoteType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereUsersId($value)
 */
	class Notes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RoleHierarchy
 *
 * @property int $id
 * @property int $role_id
 * @property int $hierarchy
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereHierarchy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereRoleId($value)
 */
	class RoleHierarchy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Status
 *
 * @property int $id
 * @property string $name
 * @property string $class
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notes[] $notes
 * @property-read int|null $notes_count
 * @method static \Database\Factories\StatusFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 */
	class Status extends \Eloquent {}
}


<?php
/***************************************************************************
 *
 *   Game Section for MyBB
 *   Copyleft: © 2006-2008 The Game Section Development Group
 *   
 *   Website: http://www.gamesection.org
 *   
 *   Last modified: 20/09/2008 by Paretje
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 ***************************************************************************/

$l['not_writable'] = "The follow directory has no chmod 777:<br />\n{1}";
$l['not_deleteable'] = "The follow file/directory couldn't be deleted, possible it's because it has no chmod 777:<br />\n";

$l['nav_overview_themes'] = "بررسی اجمالی از تم";
$l['nav_add_theme'] = "افزودن پوسته";
$l['nav_import_theme'] = "بارگذاری پوسته";
$l['nav_edit_theme'] = "ویرایش پوسته";
$l['nav_export_theme'] = "خروجی گرفتن از پوسته";

$l['nav_overview_themes_desc'] = "اینجا شما میتوانید پوسته ی بخش بازی انجمن خودتان را مدیریت کنید.";
$l['nav_add_theme_desc'] = "اینجا شما میتوانید یک پوسته جدید اضافه کنید.";
$l['nav_import_theme_desc'] = "اینجا شما میتوانید پوسته جدیدی را بارگذاری کنید.";
$l['nav_edit_theme_desc'] = "اینجا شما میتوانید پوسته ی انتخاب شده ی خود را ویرایش کنید.";
$l['nav_export_theme_desc'] = "اینجا شما میتوانید از پوسته خود خروجی بگیرید.";

$l['export'] = "خروجی گرفتن";
$l['no_themes'] = "پوسته ای وجود ندارد.";

$l['theme_name'] = "نام پوسته";
$l['theme_directory'] = "دایرکتوری تصاویر";
$l['theme_catsperline'] = "بیشترین دسته بندی ها در هر سطر";
$l['theme_css'] = "سی اس اس پوسته";
$l['theme_active'] = "فعال کردن پوسته";
$l['theme_file'] = "بارگذاری فایل";

$l['theme_export_copyleft'] = "Copyleft";
$l['theme_export_website'] = "وب سایت";
$l['theme_export_support'] = "پشتیبانی";
$l['theme_export_license'] = "مجوز";

$l['theme_directory_desc'] = "The directory based in the games directory for the location of the images used in this theme.";
$l['theme_catsperline_desc'] = "The number of categories shown at one line on the Game Section in the overview.";
$l['theme_css_desc'] = "The additional CSS contents which is used in this theme. You can include this CSS in your templates with this code:<br />
&lt;link type=\"text/css\" rel=\"stylesheet\" href=\"{\$mybb->settings['bburl']}/games/css.php?tid={\$theme_games['tid']}\" /&gt;";

$l['theme_export_copyleft_desc'] = "Copyleft ...";
$l['theme_export_support_desc'] = "The place where users can get support on this theme.";
$l['theme_export_license_desc'] = "The license under which you want to license this theme. When you want to license it under a personal one, you can add a link to the text of it.";

$l['error_missing_name'] = "You didn't enter a name for this theme";
$l['error_missing_directory'] = "You didn't enter an image directory for this theme";
$l['error_missing_catsperline'] = "You didn't fill in the maximum categories per line option for this theme";
$l['error_missing_active'] = "You didn't select if you want to have the theme active";
$l['error_missing_theme_file'] = "You didn't upload a php file to import the theme from.";
$l['error_uploadfailed'] = "There is an error with the upload of the theme file.";
$l['themealreadyexist'] = "یک پوسته ی همنام در حال حاضر وجود دارد.";
$l['themedoesntexist'] = "پوسته انتخاب شده موجود نیست.";

$l['delete_theme_confirmation'] = "ایا شما می خواهید این پوسته را حذف نمایید؟";

$l['added_theme'] = "پوسته با موفقیت افزوده شد.";
$l['imported_theme'] = "پوسته ی انتخاب شده با موفقیت بارگذاری شد.";
$l['edited_theme'] = "پوسته ی انتخاب شده با موفقیت ویرایش شد.";
$l['deleted_theme'] = "پوسته با موفقیت ویرایش شد.";
?>

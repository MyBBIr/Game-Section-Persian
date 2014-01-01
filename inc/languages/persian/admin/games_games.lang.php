<?php
/***************************************************************************
 *
 *   Game Section for MyBB
 *   Copyleft: © 2006-2009 The Game Section Development Group
 *   
 *   Website: http://www.gamesection.org
 *   
 *   Last modified: 14/04/2009 by Paretje
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

$l['cantmakedir'] = "Can't make this directory:<br />\n{1}";
$l['not_writable'] = "The follow directory has no chmod 777:<br />\n{1}";
$l['not_deleteable'] = "The follow file/directory couldn't be deleted, possible it's because it has no chmod 777:<br />\n{1}";
$l['not_copyable'] = "The follow file couldn't be copied, possible it's because the source file isn't readable, or the destination already exists and has no chmod 777:<br />\n{1}";

$l['nav_overview'] = "هفتگی";
$l['nav_add_game'] = "افزودن بازی";
$l['nav_add_game_simple'] = "افزودن (ساده)";
$l['nav_add_game_tar'] = "افزودن بازی (Tar)";
$l['nav_edit_game'] = "ویرایش بازی";

$l['nav_overview_desc'] = "اینجا شما میتوانید بازی های انجمن خودتون رو ویرایش کنید.";
$l['nav_add_game_desc'] = "Here you can add a game on your board.";
$l['nav_add_game_simple_desc'] = "Here you can add a game on your board, using the files which the tar of the game contains.";
$l['nav_add_game_tar_desc'] = "Here you can add	a game on your board, using the tar-file of the game.";
$l['nav_edit_game_desc'] = "Here you can edit a game on your board.";

$l['search'] = "جستجو";
$l['active'] = "فعال:";
$l['active_all'] = "همه";
$l['active_active'] = "فعال";
$l['active_inactive'] = "غیرفعال";
$l['sortby'] = "مرتب سازی بر اساس :";
$l['sortby_title'] = "عنوان";
$l['sortby_name'] = "نام";
$l['sortby_dateline'] = "تاریخ افزودن";
$l['sortby_played'] = "بازی شده";
$l['order'] = "سفارش:";
$l['order_asc'] = "صعودی";
$l['order_desc'] = "نزولی";
$l['gamesperpage'] = "بازی در هر صفحه :";

$l['edit_game'] = "ویرایش بازی";
$l['delete_game'] = "حذف بازی";
$l['edit_cat'] = "ویرایش دسته بندی";
$l['gamedata'] = "دیتای بازی";
$l['play_game'] = "انجام بازی";
$l['addedon'] = "اضافه شده در :";
$l['played'] = "بیشترین بازی شده :";
$l['active_1'] = "بله";
$l['active_0'] = "خیر";
$l['no_games'] = "هیچ بازی وجود ندارد.";

$l['game_title'] = "نام بازی";
$l['game_name'] = "نام فایل ها";
$l['game_cat'] = "دسته بندی";
$l['game_cat_no'] = "دسته بندی وجود ندارد";
$l['game_description'] = "توضیح";
$l['game_what'] = "هدف";
$l['game_keys'] = "کلید ها";
$l['game_bgcolor'] = "رنگ پس زمینه";
$l['game_width'] = "عرض";
$l['game_height'] = "ارتفاع";
$l['game_score_type'] = "نوع امتیاز";
$l['game_high'] = "زیاد";
$l['game_low'] = "کم";
$l['game_active'] = "بازی فعال";
$l['game_force'] = "Force adding game";
$l['game_php'] = "فایل پی اچ پی بازی ";
$l['game_swf'] = "فایل های فلش بازی";
$l['game_gif1'] = "فایل gif بزرگ بازی";
$l['game_gif2'] = "فایل gif کوچک بازی";
$l['game_gamedata'] = "دیتای بازی شامل بازی";
$l['game_tar'] = "فایل tar بازی";

$l['game_name_desc'] = "When your files are, for example, called example.swf, example1.gif and example2.gif, you to fill in here example.";
$l['game_force_desc'] = "Do you want to force adding the game, without controlling if the game already exists?";

$l['error_missing_title'] = "You didn't enter a name for this game";
$l['error_missing_name'] = "You didn't enter the name of the files for this game";
$l['error_missing_category'] = "There is not a category selected, or the option to don't catogorise.";
$l['catdoesntexist'] = "The selected category doesn't exist.";
$l['error_missing_bgcolor'] = "You didn't enter the background color of the game";
$l['error_missing_width'] = "You didn't enter the width of the game";
$l['error_missing_height'] = "You didn't enter the height of the game";
$l['error_missing_score_type'] = "You didn't select the score type of the game";
$l['error_missing_active'] = "You didn't select if you want to have the game active";
$l['error_missing_gamedata_sel'] = "You didn't select if there are gamedata files for this game";
$l['error_missing_game_php'] = "You didn't upload a php file, or there was a problem with the upload of the file";
$l['error_missing_game_swf'] = "You didn't upload a flash file, or there was a problem with the upload of the file";
$l['error_missing_game_gifs'] = "You didn't upload (one of) the gif files, or there was a problem with the upload of the files";
$l['error_missing_game_tar'] = "You didn't upload the tar file, or there was a problem with the upload of the file";
$l['error_missing_game_tar_swf'] = "There wasn't a flash file in the tar archive, or it couldn't be copied";
$l['error_missing_game_tar_gif1'] = "There wasn't a gif1 file in the tar archive, or it couldn't be copied";
$l['error_missing_game_tar_gif2'] = "There wasn't a gif2 file in the tar archive, or it couldn't be copied";
$l['error_uploadfailed'] = "There is an error with the upload of the game.";
$l['tar_problem'] = "There is a problem with the tar file.";
$l['gamealreadyexist'] = "A game with the same filename already exists. When you want to add the game, enable then force adding game.";
$l['gamedoesntexist'] = "بازی انتخاب شده موجود نیست.";

$l['delete_gamefiles'] = "بله ، فایل بازی را حذف کن.";

$l['delete_game_confirmation'] = "آیا شما مطمئن هستید که میخواهید که این بازی را حذف کنید؟";

$l['added_game'] = "بازی با موفقیت افزوده شد.";
$l['edited_game'] = "بازی با موفقیت ویرایش شد.";
$l['deleted_game'] = "بازی با موفقیت ویرایش شد.";
?>

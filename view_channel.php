<?php
/*
 * Webviewer for my teamspeak3 statistics bot - see github.com/yugecin/tsstats
 * Copyright (C) 2014-2017  Robin C.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

	$title = 'cid not found';

	$data = false;
	if( isset( $_GET['cid'] ) && ( $data = $db->getChannel( $_GET['cid'] ) ) !== false )
	{
		$title = 'Channel stats: ' . parsespacers( $data->name, 40 );
	}

	echo '<h2>' . $title . '</h2>';

	if( $data !== false ) {
		include "view_channel_show.php";
	}


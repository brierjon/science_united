<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2018 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

// info for existing BOINC users

require_once("../inc/su.inc");

function main() {
    page_head("Info for current BOINC users");
    text_start();
    echo "
        <p>
        Science United attaches your computer
        to projects based on your science preferences.
        For example, if you select cancer research,
        your computer will compute for BOINC projects doing cancer research.
        If a new cancer project starts up, it will compute for that one too.
        <p>
        <a href=su_about.php>Read why this helps volunteer computing</a>.
        <p>
        Science United uses a single anonymous account on each project,
        and attaches your computer to this account.
        Your Science United account information is not shared with projects.
        <p>
        Science United keeps track of how much work your computers
        have done, but it has no leader boards.
        If you use Science United, you won't be able to see
        your BOINC credit totals on project web sites,
        or on sites like BOINCStats.
    ";
    text_end();
    page_tail();
}

main();
?>

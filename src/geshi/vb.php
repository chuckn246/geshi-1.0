<?php
/*************************************************************************************
 * vb.php
 * ------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org),
 *                     Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8
 * Date Started: 2004/08/30
 *
 * Visual Basic language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/08/27 (1.0.8.1)
 *  -  changed keyword list for better Visual Studio compliance
 * 2008/08/26 (1.0.8.1)
 *  -  Fixed multiline comments
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/08/30 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Visual Basic',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        // Comments (either single or multiline with _
        1 => '/\'.*(?<! _)\n/sU',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'AddressOf', 'Alias', 'And', 'Append', 'As', 'BF', 'Binary',
            'Boolean', 'ByRef', 'Byte', 'ByVal', 'Call', 'Case', 'CBool',
            'CByte', 'CCur', 'CDate', 'CDbl', 'CDec', 'CInt', 'CLng',
            'Close', 'Collection', 'Const', 'Control', 'CSng', 'CStr',
            'Currency', 'CVar', 'Date', 'Declare', 'Dim', 'Do', 'Double',
            'Each', 'Else', 'ElseIf', 'End', 'Enum', 'Erase', 'Error',
            'Event', 'Exit', 'Explicit', 'False', 'For', 'Friend',
            'Function', 'Get', 'GoSub', 'Goto', 'If', 'Implements', 'In',
            'Input', 'Integer', 'Is', 'LBound', 'Let', 'Lib', 'Like',
            'Line', 'Long', 'Loop', 'Mod', 'New', 'Next', 'Not',
            'Nothing', 'Object', 'On', 'Open', 'Option', 'Optional',
            'Or', 'Output', 'ParamArray', 'Preserve', 'Print', 'Private',
            'Property', 'Public', 'RaiseEvent', 'Random', 'ReDim',
            'Resume', 'Select', 'Set', 'Single', 'Static', 'Step',
            'Stop', 'String', 'Sub', 'Then', 'To', 'True', 'Type',
            'TypeOf', 'UBound', 'Until', 'Variant', 'While', 'With',
            'WithEvents', 'Xor'
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #66cc66;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>

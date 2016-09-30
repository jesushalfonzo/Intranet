/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	 config.language = 'es';
	 //config.uiColor = '#AADC6E';
	 //config.uiColor = '#990000';
	 //config.uiColor = '#3399CC';
	 config.uiColor = '#CCCCCCC';
	 //config.uiColor = '#FFFFFF';
	 config.width = '500px';
	 
	config.toolbar = 'MyToolbar';

    config.toolbar_MyToolbar =
    [
       // ['Source','-','Save','NewPage','Preview','-'],        
	    ['Source','-','-','-'],
        ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
        ['-','Table','HorizontalRule'], 
		['Image','Link','Unlink','Anchor'],
        '/',
        ['Styles','Format','Font','FontSize'],
        ['Bold','Italic','Strike'],        
        ['TextColor'],     		

    ];
};

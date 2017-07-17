 /**
  * $Desc
  *
  * @version    $Id$
  * @package    wpbase
  * @author     WPOpal  Team <wpopal@gmail.com, support@wpopal.com>
  * @copyright  Copyright (C) 2014 wpopal.com. All Rights Reserved.
  * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
  * @addition this license does not allow theme provider using in themes to sell on marketplaces.
  * 
  * @website  http://www.wpopal.com
  * @support  http://www.wpopal.com/support/forum.html
  */

(function($) {
	/**
 	* WPO_Layout Plugin
 	*/
 	
 	var helperStorage = {

		add : function( sid, obj ){

			if( typeof(Storage) !== "undefined" ){

			    var stack = this.get(sid);

				if( stack === '' )
					stack = [];
				else if( typeof stack != 'object' )
					stack = [stack];

				stack[ stack.length ] = obj;

			    this.set( sid, stack );

			} else {
			  //   alert( kc.__.i04 );
			}

		},
		update : function( sid, key, value ){

			if( typeof(Storage) !== "undefined" ){

			    var stack = this.get(sid);

				if( stack === '' )
					stack = {};
				else if( typeof stack != 'object' ){
					var ist = {}; ist[sid] = stack; stack = ist;
				}

				stack[key] = value;

			    this.set( sid, stack );

			} else {
			//    alert( kc.__.i04 );
			}
		},
		get : function( sid, index ){

			if( typeof( Storage ) !== "undefined" ){

				var data = localStorage[ sid ], dataObj;
				if( data === undefined )
					return '';

				data = data.toString().trim();

				if( data !== undefined && data !== '' && ( data.indexOf('[') === 0 || data.indexOf('{') === 0 ) ){
					try{
						dataObj =  JSON.parse( data );
					}catch(e){
						dataObj = data;
					}
					if( index === undefined )
						return dataObj;
					else if( dataObj[index] !== undefined )
						return dataObj[index];
					else return '';

				}else return data;

			}else {
			  //  alert( kc.__.i04 );
			    return '';
			}
		},

		set : function( sid, obj ){

			if( typeof obj == 'object' )
				obj = JSON.stringify( obj );

			localStorage.removeItem( sid );
			localStorage.setItem( sid, obj );

		},

		sort : function( sid, list ){

			var stack = this.get( sid ), istack = [];

			for( var n in list ){
				if( stack[ list[n] ] !== undefined )
					istack[ istack.length ] = stack[ list[n] ];
			}

			this.set( sid, istack );

		},

		remove : function( sid, id ){

			var stack = this.get( sid );
			delete stack[id];

			this.set( sid, stack );

		},

		reset : function( sid ){

			var stack = this.get( sid ), istack = [];

			if( stack === '' ){
				this.clear( sid );
			}else{
				for( var i in stack ){
					if( stack[i] !== null )
						istack[ istack.length ] = stack[i];
				}
			}
			this.set( sid, istack );
		},

		clear : function( sid ){

			if( typeof(Storage) !== "undefined" ){

				localStorage.removeItem( sid );

			}else {
			//     alert( kc.__.i04 );
			    return {};
			}
		}

	} ;

 	var helper = {
		
	    encode : function (input){
		    
		    if( input === undefined || input === '' ){
				return '';
			}
			
			try
		    {
			    return window.btoa(unescape(encodeURIComponent( input )));
			}
			catch (ex){return input;}

	    },
	
	    decode : function (input){

		    if( input === undefined || input === '' ){
				return '';
			}
		    
		    try
		    {
			    return decodeURIComponent(escape(window.atob( input )));
			}
			catch (ex){return input;}

	    },

	    toClipboard : function( str ) {

			if (window.clipboardData) {
                window.clipboardData.setData ("Text");
            }else {
	   			
	   			document.oncopy = function(event) {
					event.clipboardData.setData('text', str);
					event.preventDefault();
				};
				document.execCommand("Copy", false, null);
				document.oncopy = null;
			// 	alert('f');
			}
		},
		fromClipboard : function (){

			if (window.clipboardData) {
				return window.clipboardData.getData('Text');
			}

			if (event) {
				return event.originalEvent.clipboardData.getData('Text');
			}

			if (typeof clipboardApplet !== 'undefined' && clipboardApplet.readFromClipboard) {
				return clipboardApplet.readFromClipboard();
			}

			throw new Error("There is no way to get the content of the clipboard!");
		},

		coordinates : function( el, pop_width, keepCurrent ){
				
			var grids;
			if( $(el).closest('#kc-container').get(0) )
				grids = document.getElementById('kc-container').getBoundingClientRect();
			else if( document.getElementById('wpbody-content') !== null )
				grids = document.getElementById('wpbody-content').getBoundingClientRect();	
			else if( document.getElementById('content') !== null )
				grids = document.getElementById('content').getBoundingClientRect();
			else grids = document.getElementsByTagName('body')[0].getBoundingClientRect();
			
			if( el === undefined )
				return [0,0,0,0];
					
			var coor = el.getBoundingClientRect(),
				swidth = (grids.width/3),
				sleft = coor.left-grids.left,
				top = coor.top+$(window).scrollTop()+coor.height-this.margin_top,
				bottom = 0,
				left = coor.left+$(window).scrollLeft()+(coor.width/2),
				tip = 0,
				pos = '',
				wheight = $(document).height(),
				wwidth = $(document).width();
				
			if( sleft < swidth ){
				pos = 'left';
				left -= 63;
			}else if( sleft > swidth && sleft < swidth*2 ){
				pos = 'center';
				left -= (pop_width/2);
			}else if( sleft > swidth*2 && sleft < swidth*3 ){
				pos = 'right';
				left -= (pop_width-63);
			}
			
			if( wheight - top < 200 && $(window).scrollTop() > 0 ){
				
				bottom = wheight-top+(coor.height/2);
				$('html').height( wheight - parseInt( $('html').css('padding-top') ) );
			
			}else if( keepCurrent !== true ){
				$('html').height('');
			}
			
			if( left < 50 ){
				tip = left - 50;
				left = 50;
			}
			
			if(  left+swidth > wwidth ){
				left -= ( (left+swidth) - wwidth ) + 50;
			}
			return [ top, left, pos, bottom, tip ];
			
		},
			
	};

	$.fn.WPO_Layout = function( opts, datajson ) {
		
		/*
		 * default configuration
		 */
		var config = $.extend({}, {
			gutter	   :   30,
			coldwith   :   54,
			defaultcol :   3,
			col 	   :   12,
			confirmdel :   'Are you sure to delete?',
			urlwidgets :   'widgets.php',
			urlwidget  :   'form.php',
			urlwidgetdata: 'data.php',
			formsellector: '#frmsavealll',
			controller : 'AdminPspagebuilderProfile',
			cloudlink  : ''
		}, opts);

		/**
		 * store wrapper layout editor.
		 */
		var $wpolayout = null;

		/**
		 * store instances of WPO_Widget
		 */
		var $wpowidget = $("body").WPO_Widget( config );

		var $screenmode = 'large-screen';
		
		var $colkey = 'lgcol';

		/** 
		 * caculate total layout width based on column's width and gutter + number of columns 
		 */
		var layoutwidth = config.coldwith*config.col + ((config.col-1)*config.gutter);
	 	
	 	/**
	  	 *  preload widgets using for layout edtior and add some elements as suggest row to click add to new row.
	  	 */				
	  	function init(){ 
	  		//$wpolayout.append('<div class="inner"></div>');

	  		$wpolayout.width( layoutwidth );
	  		
	  		addSuggestRow();

	  		$('.cloud-copy-link').fancybox({type: 'ajax',width:'90%',afterShow:function(){
	  			$( '.fancybox-wrap .cloud-element' ).click( function(){
	  				console.log( $('textarea',this).val() );
	  				renderCreateRowByJson( $.parseJSON($('textarea',this).val()) );
					$.fancybox.close( )
	  			} );
	  		}}); 
	  		
	 
	  
	  		
	  	};

	  		
	  	/**
	  	 * add new column element and append it before suggest column.
	  	 * 
	  	 * return Object col: jquery object of that column
	  	 */	
	  	function addColumn( scol, row ){
	  		$( ".lg-col", $wpolayout ).removeClass( "active" );	
	  		var col = $( '<div class="active lg-col wpo-col">\n\
                            <div class="inner clearfix"><div class="wpo-delete wpo-icon ptstooltip" data-toggle="tooltip" data-placement="top" title="Delete"></div>\n\
                            <div class="wpo-edit wpo-icon ptstooltip" data-toggle="tooltip" data-placement="top" title="Edit"></div>\n\
                            <div class="wpo-addrow wpo-icon ptstooltip" data-toggle="tooltip" data-placement="top" title="Add row"></div>\n\
                            <div class="wpo-addwidget wpo-icon ptstooltip" data-toggle="tooltip" data-placement="top" title="Add Widget"></div>\n\
                            <div class="wpo-content"></div></div></div>' );
	  		col.width( config.coldwith*3+2*config.gutter 	);
	  		// col.insertBefore( scol );
	  		$(row).children('.inner').append( col )
	  		col.data( "colcfg", new WPO_DataCol() );

	  		bindingColEventS( col , row );		
	  		
	  		return col;
	  	}

	  	/* binding events for column */
	  	function bindingColEventS( col, row ){
	  		var maxWidth = layoutwidth; 
	  		col.resizable({
			    stop: function(event, ui) {  

				 	setTimeout( function(){
				 		var c =  Math.floor(config.col*col.width()/row.width())+1;
				 		maxWidth = row.width();
				 		if( c > 12 ){
				 			c = 12;
				 		}
						updateColsWidth(col,c);
					
						 
					 }, 200 );	
		 	
			    },
			     handles: 'e',
			     maxWidth:maxWidth+config.gutter,
			     minWidth:config.coldwith
			}); 
	  		col.click( function(event) {
	  			// $( ".wpo-edit", col ).click();
  				$( ".wpo-col", $wpolayout ).removeClass( "active" );	
	  			col.addClass( 'active' );
	  			$( "#col-builder" ).hide();
	  			event.stopPropagation();
	  		} );
			$( ".wpo-delete" ,col).click( function(){
				if( confirm(config.confirmdel) ){
					col.remove();  
		 			recalculateColsWidth( row );
		 		}
			} );

			// set default values or element'data 
			$( ".wpo-edit", col ).click( function(event){   
	  			var cfg = col.data("colcfg") ; 


	  			for( var k in cfg ){   
	  				if( $("[name="+k+"]", "#col-builder") ) {
	  					$("[name="+k+"]", "#col-builder").val( cfg[k] ); 
	  				}
	  			}
	  			showEditStyleForm( cfg, $( "#col-builder" ) );
	  			$( ".wpo-col", $wpolayout ).removeClass( "active" );	
	  			col.addClass( 'active' );
	  			
	  			var pos = $( ".wpo-edit", col ).offset();
	  			var l = pos.left;  
	  			var aa = $("#header_infos").height() + $(".page-head").height() + 20; 
	  			var bb = $("#nav-sidebar").width();
	  			$( "#col-builder" ).css( {top:pos.top-$( "#col-builder" ).height()/2 - aa, left:l-bb} ).show();
	  			event.stopPropagation();
	  		} );

			$( ".wpo-addwidget", col ).click( function(){
				$wpowidget.showWigetsList( col );
			} );

			// bind sortable event to re-sort widgets inside.
			$( ".wpo-content", col ).sortable({
				connectWith: ".wpo-col .wpo-content",
				 placeholder: "ui-state-highlight-widget",
				 over:function(event, ui ){   ui.item.width(ui.placeholder.width() ) }
			}); 

			$( '.wpo-addrow', col ).click( function(){
				addRow( col.children( '.inner' ), true ); 
			} );	
	  	}

	  	/**
	  	 *
	  	 */

	  	function setColsWidthBySettings( widths, row ){

  			var childnum = $(row).children('.inner').children( ".wpo-col" ).length;
  			// console.log( 'old:'+childnum +"--n:" + widths.length );
  			// remove items 	
  			if( widths.length < childnum){
  				var childs =  $(row).children('.inner').children( ".wpo-col" ); 
  				for ( var i=widths.length; i < childnum; i++ ){  
  					childs.get( i ).remove();
  				} 
  			}else if( widths.length > childnum ) {
  				for( i=childnum; i< widths.length; i++ ){ 
  					addColumn( null, row );
  				}
  			}

  			$(row).children('.inner').children( ".wpo-col" ).each( function(i, col ) {
  				updateColsWidth( this, widths[i] );
  			});
	  	}

	  	function showCustomSetColumnsWidth( row ){  

	  		var pos = $( row ).offset(); 

	  		var popup = $('#custom-width-columns');
	   

			var pos = $( row ).offset(); 
  			var l = pos.left;  
  			var aa = $("#header_infos").height() + $(".page-head").height() + 20; 
  			var bb = $("#nav-sidebar").width();
  			popup.css( {top:pos.top-popup.height()*2+40, left:l-bb} ).show();

	  		// event.stopPropagation();

	  		$('.sg-row',popup).click( function(){

	  			var columns = $(this).data('columns').split('|');
	  			var tmp = new Array();
	  			j = 0;
	  			for( var i in columns ){
	  				//console.log( i );
	  				if( columns[i] > 0 ){
	  					tmp[j++] = columns[i];
	  				}	
	  			} 
	  			setColsWidthBySettings( tmp, row ); 

	  			$('input', popup ).val( $(this).data('columns') ); 
	  		} );

	  		$('.btn-apply-change-widths', popup).click( function(){   
	  			var columns = $('input', $(this).parent() ).val().split('|'); 


	  			if( columns ){
	  				var tmp = new Array();
		  			j = 0;
		  			for( var i in columns ){
		  				//console.log( i );
		  				if( columns[i] > 0 ){
		  					tmp[j++] = columns[i];
		  				}	
		  			} 

		  			if( tmp.length > 0  ){
		  				setColsWidthBySettings( tmp, row );	
		  			}
	  			}

	  		} );	

	  	}

	  	/* recaculate column width */
	  	function recalculateColsWidth( row ){
 	 	
			var childnum = $(row).children('.inner').children( ".wpo-col" ).length;
			var dcol = Math.floor( 12/childnum );
			var a = 12%childnum;

			$(row).children('.inner').children( ".wpo-col" ).each( function(i, col ) {
				if( a > 0 && (i == childnum-1) ){
		 			dcol = dcol+a;
				}
 				updateColsWidth( this, dcol );
	 		
			});
		 
		}

		function updateColsWidth( col, dcol ){  
			 
	     	$(col).css( {'width':dcol/config.col*100 +'%'} );  
 			var data =  $(col).data( 'colcfg' );
			data[$colkey] = dcol;
			$(col).data( 'colcfg', data );
		}

	  	function createColForm( idx, col ){

	  	}


	  	/**
	  	 * add new row element and append it before suggest row.
	  	 * 
	  	 * return Object col: jquery object of that column
	  	 */	
	  	function addRow( srow, sub ){

	  		var row = $( '<div class="wpo-row lg-row"><div class="wpo-tool row-controls"><div class="wpo-sortable action-control ptstooltip" data-toggle="tooltip" data-placement="top" title="Sort"></div></div><div class="inner clearfix"></div></div>' );
	  		var edit = $('<div class="wpo-edit action-control ptstooltip" data-toggle="tooltip" data-placement="top"  title="Edit"></div>');
	  		var copyclipboard = $('<div class="copy-clipboard action-control ptstooltip" data-toggle="tooltip" data-placement="top" title="Copy to clipboard"></div>');
	  		var copy = $('<div class="wpo-copy action-control ptstooltip" data-toggle="tooltip" data-placement="top" title="Duplicate"></div>');
	  		var del = $('<div class="wpo-delete action-control ptstooltip" data-toggle="tooltip" data-placement="top" title="Delete"></div>');

	  		
	  		$(row).children(".wpo-tool").append(del).append(copy).append(copyclipboard).append(edit);	
	  		
	  		bindingRowEvents( row , srow, sub );
	  		
			//row.insertBefore( srow );
			if( sub !=null && sub== true ){
				srow.append( row );	
				srow.addClass('hd-widgets-func');
				addSuggestColumn( row );
				row.addClass( 'active' );
			}else {
				$wpolayout.children('.inner').append( row );	
				addSuggestColumn( row );
				$wpolayout.children('.inner').children( ".wpo-row").removeClass( "active" );	
				row.addClass( 'active' );
			}
		
		
			row.data( "rowcfg", new WPO_DataRow() );

			return row;
	  	};

	  	/* 
	  	 * clone data from orginal for new 
	  	 */
	  	function cloneData( data, target ){
			for( var k in target ){   
			 	target[k] = data[k];
			}
	  		return target;
	  	}

	  
  		/* 
  		 * ROW PROCESS: add and create a setting form
  		 */	
	  	function bindingRowEvents( row , srow ){
	  		$(".wpo-tool .wpo-delete", row).click( function(){
	  			if( confirm(config.confirmdel) ){
	  				if( row.parent().children('.wpo-row').length<= 1 ){
	  					row.parent().removeClass( 'hd-widgets-func' );
	  				}
	  				
	  				row.remove();
	  			}
	  		} );

	  		$(".wpo-copy", row).click( function( event ){
	  			cloneLayoutInRow( row, srow );
	  		} );

	  		// set default values or element'data 
	  		$( ".wpo-edit", row ).click( function(event){ 
	  			$( ".wpo-row", $wpolayout ).removeClass( "active" );
	  			var cfg = row.data("rowcfg") ; 
	  			$( "#row-builder input").val( '' );  
	  			$( "#row-builder select").val( '' );  
	  			for( var k in cfg ){
	  				$("[name="+k+"]", "#row-builder").val( cfg[k] ); 

	  				if( k.indexOf('color') != -1 ){
	  					if( cfg[k] ){ 
	  						$("[name="+k+"]", "#row-builder").css({'background-color':cfg[k]}); 
	  					}else{
	  						$("[name="+k+"]", "#row-builder").css({'background-color':'#FFFFFF'}); 	
	  					}
	  				}	
	  			}

	  			showEditStyleForm( cfg, $('#row-builder') );
	  			
	  		 	
	 
				var that = $(this).parent(); 
				var parentOffset = that.offset(); 
 
		  		var relX =  parentOffset.left - $( "#row-builder" ).outerWidth() - 100;
		   		var relY =  parentOffset.top - 120;
   				
   				$( "#row-builder" ).css( {top:relY , left:relX} ).show();

  				$(row).addClass( 'active' );

  	 
				 event.stopPropagation();
	  		} );

	  		row.click( function( event ){
	  			$( ".wpo-row", $wpolayout ).removeClass( "active" );
	  			row.addClass( "active" );
	  			$( "#row-builder" ).hide();
	  			event.preventDefault();

	  		} );


	  		row.delegate( ".sg-col", "click", function(){ 
	  			addColumn( $(this), row );
	  		 	recalculateColsWidth( row ); 
	  		} );	
	  		 

	  		row.delegate( ".config-col", "click", function(){ 
 				showCustomSetColumnsWidth( row );
	  		} );	

	  		row.delegate( ".copy-clipboard", "click", function(){   
	  			$(this).css('background-color', '#E6644E').stop().delay(1000).queue( function(){  
	               $(this).css('background-color', '')
	            } );
	  			copyRowToClipboard( row );
	  		} );

	  		// bind sortable for this to sort columns on current row and other rows.	
		 	$( row ).children('.inner').sortable({
				connectWith: ".wpo-row > .inner", 
				placeholder: "ui-state-highlightcol",
	 			update:function( event, ui ){  
	 			
	 			},
	 			
	 			remove:function(){  
	 			 	var trow = $(this).parent();
 			   		 recalculateColsWidth( trow );
	 			},
	 			start:function( event, ui ){
	 		 		$( '.ui-state-highlightcol', row ).width( $(ui.item).width() );
	 			},
	 			receive: function( event, ui ) {
	 			   	 var trow = $(this).parent();
 			   		 recalculateColsWidth( trow );
	 			},
	 			cancel: ".wpo-sortable, .add-col"
			});	 
		 	 		
	  	}
		
		/**
		 *
		 */
		function cloneLayoutInRow( row, sub, incol ){
			
			var cr = addRow( sub==true?incol.children( '.inner' ):$(".add-row",$wpolayout), sub );
			cr.data( 'rowcfg', cloneData(row.data( 'rowcfg'),new WPO_DataRow()) );
		 
			$(row).children('.inner').children( ".lg-col" ).each( function(){	
				var cc = addColumn( $(cr).children('.inner').children(".wpo-row.active .sg-col"), cr );
				 
  				 $(this).children('.inner').children('.wpo-content').children( '.wpo-ijwidget' ).each( function(){   
  				 	var rwd   = cloneData( $(this).data('wgcfg'), new WPO_DataWidget() );  
		  			rwd.wkey  = $wpowidget.getWidgetKey();
  				 	var cwkey = $wpowidget.createWidgetButton( cc, $("#wpo_"+rwd.wtype) , rwd );	
  				 	$wpowidget.cloneFormData( cwkey, $(this).data('wgcfg').wkey );	

  				} );
  		 		var rcd = $(this).data('colcfg'); 
  				cc.data( 'colcfg', cloneData(rcd,new WPO_DataCol()) );
  				
  				$(cc).css( {'width':(rcd.lgcol/config.col*100)+'%'} );  
  				if( $(this).children('.inner').children( '.wpo-row' ).length > 0 ){  

	  				$(this).children('.inner').children( '.wpo-row' ).each( function(){   
	  					cloneLayoutInRow( $(this), true, cc );
	  				});
  				}

			} );
	 	}

  		/**
	  	 * add suggest row using to click to this for adding new real row
	  	 */
	  	function addSuggestRow(){
	  		
	  	
	  		$wpolayout.find('.add-row').click( function(){
	   
	  			var row = addRow( this );
	  			var columns = $(this).data('columns').split('|');
	  			var tmp = new Array();
	  			j = 0;
	  			for( var i in columns ){
	  				//console.log( i );
	  				if( columns[i] > 0 ){
	  					tmp[j++] = columns[i];
	  				}	
	  			} 
	  			setColsWidthBySettings( tmp, row );

	  		} );

	  		$wpolayout.find('.paste-clipboard').click( function () {  
	  			var instance =  helperStorage.get( 'clipboard' ) ; 

		 		if( instance ){
		 			renderCreateRowByJson( instance );
		 		}else {
		 			alert( $(this).data( 'alert' ) );
		 		}
	  		} );
	  	};

	  	/**
	  	 * add suggest column using to click to this for adding new real row
	  	 */
	  	function addSuggestColumn( row ){
	  		var scol = $(  '<div class="add-col sg-col ptstooltip" data-toggle="tooltip" data-placement="top" title="Add Column"></div>' );
	  		$(row).children(".inner").append( scol );	

	  		var ccol = $(  '<div class="config-col ptstooltip" data-toggle="tooltip" data-placement="top" title="Custom Set Columns"></div>' );
	  		$(row).children(".inner").append( ccol );	
	  	};


	  	/**
	  	 * binding some delegate events
	  	 */
	  	function bindDelegateEvents(){

 			$( ".popover" ).each( function(){
 				var pop = this;
 				$( '.popover-title',this ).click( function(){
 					$( pop ).hide();	
 				} );
 			} );

 			$(".button-alignments button").click( function (){
 				$screenmode = $(this).data('option');
 				$(".button-alignments button").removeClass('active');
 				$(this).addClass( 'active' );
 				updateColWidthByScreen();

 			} );
	  	}

	  	function updateColWidthByScreen(){
	  	
	  		switch( $screenmode ){
	  			case 'medium-screen':
	  				$colkey = 'mdcol';
	  				break;
	  			case 'tablet-screen':
	  				$colkey = 'smcol';
	  				break;
	  			case 'mobile-screen':
	  				$colkey = 'xscol';
	  				break;
	  			default: 
	  				$colkey = 'lgcol';	
	  		}

	  		$("#layout-builder .wpo-row").each( function(){
	 			var _row = $(this);
	 			$( '.wpo-col', _row ).each( function(){
	 				var rcd = $(this).data('colcfg');  
	 				$(this).css( {'width':rcd[$colkey]/config.col*100+'%'} );  
	 			});
		 	});		
	  	}

	  	function saveStyleCss( cfg, inputs  ){

	  		var atts = ['margin','padding','border','bradius'];

  			$.each( atts, function( key, val ){
  					 
		 		var ms =  "";
		 		var check = true; 
		 		inputs.find('input[name^="'+val+'"], select[name^="'+val+'"]').each( function (k,v) {
				 	if( $(this).val( ) == "" ){
				 		ms +=  (val == 'padding' ||  val == 'margin' ? "auto " : "inherit " );	
				 		check = false;			 
				 	}else{
				 		 ms += $(this).val() + " ";		
				 		 check = true;
				 	}
				} );
		 
				if(  $.trim(ms.replace(/inherit/g,'')) == "" ){
				 	cfg[val] =  "";
				} else {
					cfg[val] =  $.trim(ms); 		
				}
			} );
  			
			return cfg;
	  	}

	  	function showEditStyleForm( cfg , input ){
  			var atts = ['margin','padding','border','bradius'];

  			$.each( atts, function( key, val ){
				if( cfg[val] ){
	  		 		var ms =  cfg[val] .split( ' ' );
	  	 
	  		 		input.find('input[name^="'+val+'"], select[name^="'+val+'"]'  ).each( function (k,v) {
	  				 	if( ms[k] ){
	  				 		$(this).val( ( ms[k] == 'auto' || ms[k] == 'inherit' ? "": ms[k] ) );
	  				 	}else{
	  				 		$(this).val( '' );
	  				 	}
	  				} );
	  		 	} 
  			} );

	  	}
	 	/**
	 	 * add event triggers to operator in form of selected column and selected row 
	 	 */
	 	function triggerFormsEvent(){
	 		$("form .auto-correct").keyup( function() {
	 			if(  $(this).val() != "" ){
	 				if( !isNaN($(this).val()) ){
	 					$(this).val( parseInt($(this).val())+$(this).data('suffix')); 
	 				}



	 			}
	 		} );
	 		$("form .auto-correct").change( function(){
	 			if(  $(this).val() != "" ){
	 				if( $(this).val().indexOf('px') == -1 ){
	 					$(this).val( $(this).val()+$(this).data('suffix')); 
	 				}
	 			}
	 		} );
	 		/* ROW SETTING HANDLER */
	 		$("#row-builder form").submit( function(){ 

	 			if( $(".wpo-row.active") ){
	 				var cfg = $(".wpo-row.active").data( 'rowcfg' );
	 				for( var k in cfg ){
	 			
	  					if( $("[name="+k+"]", "#row-builder").length > 0 ){
	  			 			cfg[k] = $("[name="+k+"]", "#row-builder").val(  ); 
	 			
	  			 		}
	  				}
	  				var vcfgs = new WPO_DataRow();
	  				for( var vk in vcfgs ){
	 			
	  					if( $("[name="+vk+"]", "#row-builder").length > 0 && !cfg[vk] ){
	  			 			cfg[vk] = $("[name="+vk+"]", "#row-builder").val(  ); 
	 			
	  			 		}
	  				}
	  			 	cfg = saveStyleCss( cfg, $('#row-builder') );
	  				$(".wpo-row.active").data( 'rowcfg' ,cfg );
	 			}  

 				$( "#row-builder" ).hide();
	 			return false;
	 		} );

	 		/* COLUMN SETTING HANDLER */
	 		$("#col-builder form").submit( function(){ 
	 		 
	 			if( $(".wpo-col.active") ){
	 				var cfg = $(".wpo-col.active").data( 'colcfg' );
	 				for( var k in cfg ){
	  				 	var val = $("[name="+k+"]", "#col-builder").val( ); 
	  			 		
	  					if( $("[name="+k+"]", "#col-builder").length > 0 ){
	  			 			cfg[k] = val;
	 			
	  			 		}
	  				}

	  				var vcfgs = new WPO_DataCol();

	  				for( var vk in vcfgs ){
	  					if( $("[name="+vk+"]", "#col-builder").length > 0 && !cfg[vk] ){
	  			 			cfg[vk] = $("[name="+vk+"]", "#col-builder").val(  ); 
	  			 		}
	  				}
	  				cfg = saveStyleCss( cfg, $('#col-builder') );
	  				$(".wpo-col.active").data( 'colcfg' ,cfg );
	 			}  
 				$( "#col-builder" ).hide();
	 			return false;
	 		} );
	 	}

	 	function copyRowToClipboard( _row ){

	 		var output = new Array();	
	 		// var _row = $(this);
 			var data = _row.data('rowcfg');
 			data.cols = new Array();
 			$(_row).children('.inner').children( '.wpo-col' ).each( function(){  
 				var _col = $(this).data('colcfg');
 				_col.widgets = new Array();

 				$(this).children('.inner').children('.wpo-content ').children( '.wpo-ijwidget' ).each( function() {  
 					var w =  $(this).data('wgcfg'); 

 					w.data_config = helper.encode ( $( 'textarea', this).val() ); 
 					w.wkey = $wpowidget.getWidgetKey();
 					_col.widgets.push( w );

 				} ); 
 				_col.rows = new Array();
 				if( $(this).children('.inner').children( '.wpo-row' ).length > 0 ){
 					_col.rows = getLayoutData( this );
 				}
 				data.cols.push( _col );
 			} );
 			// output.push( data );  
	 		content = JSON.stringify( data );
	 		/// console.log( content );
	 		helper.toClipboard( content );
	 		helperStorage.set( 'clipboard' , content );
	 		return true;
	 	}



	 	function getLayoutData( container ){
 			var output = new Array();	
 			$( container ).children('.inner ').children(".wpo-row").each( function(){
 		 
	 			var _row = $(this);
	 			var data = _row.data('rowcfg');
	 			data.cols = new Array();
	 			$(_row).children('.inner').children( '.wpo-col' ).each( function(){
	 				var _col = $(this).data('colcfg');
	 				_col.widgets = new Array();

	 				$(this).children('.inner').children('.wpo-content ').children( '.wpo-ijwidget' ).each( function() {  
	 					_col.widgets.push( $(this).data('wgcfg') );
	 				} ); 
	 				_col.rows = new Array();
	 				if( $(this).children('.inner').children( '.wpo-row' ).length > 0 ){
	 					_col.rows = getLayoutData( this );
	 				}
	 				data.cols.push( _col );
	 			} );
	 			output.push( data );  
		 	} );
	 		return output;	
	 	}

	 	/**
	 	 * add event triggers to operator in form of selected column and selected row 
	 	 */
	 	function triggerSaveForm(){

	 		$( config.formsellector ).submit( function(){
	 			
	 			var output = getLayoutData( '#layout-builder' );
	 		    var j = JSON.stringify( output ); 
	 		     
	 		    if( $(config.formsellector + " .hidden-layout-input").length<=0 ){
					var ws = $('<textarea name="wpolayout"  class="hidden-layout-input"></textarea>');
					ws.val( j );
					$( config.formsellector ).append( ws );
	 			}
	 	 		
	 			return true; 
	 		} );
	 	}

	 	/**
	 	 * build layout having rows, columns and widgets.
	 	 */
	 	function renderLayoutInRow( rows, widgetids, sub, incol ){
	 		$(rows).each( function() {
	  			// add row here
	  			var row = addRow( sub==true?incol.children( '.inner' ):$(".add-row",$wpolayout), sub );
	  			$( this.cols ).each( function(){ 

	  				var col = addColumn( $(row).children('.inner').children(".wpo-row.active .sg-col"), row, sub );

	  				$( this.widgets ).each( function(){   
	  					if( this.data_config != null || this.data_config != undefined ){
	  						this.wkey = $wpowidget.getWidgetKey();
	  						this.data_config = helper.decode( this.data_config );
	  					}
	  				 	$wpowidget.createWidgetButton( col, $("#wpo_"+this.wtype) , this );	
	  				 	widgetids.push( this.wkey ); 

	  				} );
	  				
	  				this.widgets = null;
	  				col.data( 'colcfg', this );
	  			    $(col).css( {'width':(this.lgcol/config.col*100)+'%'} );  
  					if( this.rows.length > 0 ){
	  					 renderLayoutInRow( this.rows, widgetids, true, col ); 
	  				}
	  				this.rows = null;
	  			} );

	  			this.cols = null;
	  			row.data( 'rowcfg', this );
  			} );
  			return true;
	 	}

	 	function renderCreateRowByJson( json ){
			var row = json; 
			var rows = new Array();
			rows[0] = row; 
			var widgetids = new Array();
			if( json ) { 
	  			renderLayoutInRow( rows , widgetids, false );
		  	}	

	 	}

	 	/**
	 	 *
	 	 *
	 	 */
	 	function buildLayoutByJson( json ) {  
	 		var widgetids = new Array(); 
	 		if( json ) { 
		  		try{
		  			var rows = $.parseJSON( json  );
	  				renderLayoutInRow( rows , widgetids, false );
		  		}catch( e ){
		  			console.log( json );
		  			console.log( e );
		  		}
		  		
		  	}	 
		  	$wpolayout.fadeIn( 600 );	
		   	
		   	$( "#layout-builder > .inner" ).sortable({
				connectWith: ".layout-builder",
				placeholder: "ui-state-highlight",
				handle:'.wpo-sortable' 
			});	

		   	$( ".wpo-col > .inner" ).sortable({
				connectWith: ".layout-builder",
				placeholder: "ui-state-highlight",
				handle:'.wpo-sortable',
				cancel:'.wpo-icon, .wpo-content' 
			});	

	   		$wpowidget.loadWidgetByIds( widgetids );	
	 	}

	 	
	 	function html_icon( parent_e, val, text ){
	 		
	 		var html = '';
        		html += '<div id="categorytab_'+ val +'">';
            		html += '<label>Set icon for: <strong>'+ text +'</strong></label>';

            		html += '<div class="pts-container" style="padding:10px; border: 1px solid #e6e6e6;">';

	            		html += '<label>Icon Class</label>';
	            		html += '<input type="text" name="categorytab['+ val +'][icon_class]" class="icon_class_category">';

	            		html += '<label>Icon</label>';
	            		html += '<input type="text" name="categorytab['+ val +'][icon]" class="icon_category">';

            		html += '</div>';
        		html += '<br><br></div>';

    		parent_e.append(html);
	 	}

	 	function end_loaded() {
	 		$wpowidget.find('#page-header-desc-configuration-save').show();
			$wpowidget.find('#page-header-desc-configuration-default').show();
            $wpowidget.find('.pagebuilder-editor .ptspreload').remove();
	 	}
	 	/**
	 	 * initialize every element
	 	 */
		this.each(function() { 
			 
			$wpolayout = $(this);
		 
			
			init(); 

			/* add some global delegate events */
			bindDelegateEvents();

			/* add event triggers to operator in form of selected column and selected row */
			triggerFormsEvent();

			/* add trigger saving setting layout form */
			triggerSaveForm(); 

			/* preload all widgets types by ajax then calling buildLayoutByJson to render layout follow setting*/
			$wpowidget.find('.pagebuilder-editor').append('<div class="ptspreload"></div>');
			$wpowidget.find('#page-header-desc-configuration-save').hide();
			$wpowidget.find('#page-header-desc-configuration-default').hide();

		 	//$.when( $wpowidget.loadWidgets( false, buildLayoutByJson, datajson  ) ).then( end_loaded() ); 
		 	$wpowidget.loadWidgets( false, buildLayoutByJson, datajson  );	
            
            

            $("body").delegate(".wpo-row", "mouseenter", function(){
                $(".ptstooltip").tooltip();
            });



            $("body").delegate('#associated-categories-tree input[name="categoryBox[]"]', "click", function(){
            	if($("#category_tab_image").length > 0){
            		var parent_e = $("#category_tab_image");
            		var val = $(this).val();
            		var text = $(this).parent().text();

	            	if($(this).is(':checked')){
	            		if( $('#categorytab_'+ val).length <= 0 ) {
		            		html_icon( parent_e, val, text );

		            		$( '#categorytab_'+ val + ' .icon_category' ).WPO_Gallery();
		            	}
	            	}else{
	            		$('#categorytab_' + val, parent_e).remove();
	            	}

                }
            });

            $("body").delegate('#check-all-associated-categories-tree, #uncheck-all-associated-categories-tree', "click", function(){

            	if($("#category_tab_image").length > 0) {
            		$('#associated-categories-tree input[name="categoryBox[]"]').each(function() {
            			var parent_e = $("#category_tab_image");
	            		var val = $(this).val();
	            		var text = $(this).parent().text();

		            	if($(this).is(':checked')){
		            		if( $('#categorytab_'+ val).length <= 0 ) {
			            		html_icon( parent_e, val, text );

			            		$( '#categorytab_'+ val + ' .icon_category' ).WPO_Gallery();
			            	}
		            	}else{
		            		$('#categorytab_' + val, parent_e).remove();
		            	}
            		});
                }
            });

            $("body").delegate('.addNewPromotion', "click", function(){
            	if($('#promotions_image_mng').length > 0){
            		var val = $('.promotion_item').length;
            		var html = '';
		        		html += '<div id="promotions_'+ val +'" class="promotion_item">';

		            		html += '<div class="pts-container" style="padding:10px; border: 1px solid #e6e6e6;">';

		            			html += '<label>Title</label>';
			            		html += '<input type="text" name="promotions['+ val +'][title]" class="title_promotion">';


		            			html += '<label>Description (Raw HTML)</label>';
			            		html += '<textarea class="rte_promotion rte_promotion_'+ val +'" name="promotions['+ val +'][description]"></textarea>';

			            		html += '<label>Url</label>';
			            		html += '<input type="text" name="promotions['+ val +'][url]" class="url_promotion">';

			            		html += '<label>Image</label>';
			            		html += '<input type="text" name="promotions['+ val +'][image]" class="image_promotion">';

			            		
		            		html += '</div>';
		        		html += '<br><br></div>';

		    		$('#promotions_image_mng').append(html);
		    		$( '#promotions_'+ val +' .image_promotion' ).WPO_Gallery();

            	}
            });

 			$("body").delegate('.removePromotion', "click", function(){
            	if($('#promotions_image_mng').length > 0){
            		var number = $('.promotion_item').length;
            		if(number > 1){
            			number = number - 1;
            			$('#promotions_' + number, '#promotions_image_mng').remove();
            		}
            	}
            });
		});

        


		return this;
	};
	
})(jQuery);

/**
 * Created by Maxim.Muynast on 07.07.14.
 */

var new_table = "";
var rows = 0;
var old_table = $('.aa_catalog_1');

var items = old_table.find('td').each(function( index ) {

    var img = $(this).find('img')[0];
    var text =  $(this).text();

    if ( img ) {
        var img_src = img.src;
        rows++;

        var cell = "<td style='width: 20%; padding: 5px;' class='wp-caption'>"
            + "<img title='" + text + "' src='" + img_src +"' alt='" + text + "' width='150' height='150' border='0'>"
            + "<p class='wp-caption-text'>" + text + "</p></td>";

        if (rows == 1) {
            new_table += "<tr>" + cell;
        } else if (rows == 5) {
            new_table += cell + "<tr>";
            rows = 0;
        } else {
            new_table += cell;
        }

    }


});

old_table.html(new_table);





/*********************/

var new_table = "";
var rows = 0;
var old_table = $('.aa_catalog');

var items = old_table.find('td').each(function( index ) {

    var imgs = $(this).find('img');
    //var text =  $(this).text();

    if (imgs) {
        imgs.each(function() {
            var img_src = this.src;
            rows++;

            var cell = "<td style='width: 20%; padding: 5px; padding-bottom: 20px; vertical-align: top;' class='wp-caption'>"
                + "<img title='" + this.alt + "' src='" + this.src +"' alt='" + this.alt + "' width='150' height='150' border='0'>"
                + "<p class='wp-caption-text'>" + this.alt + "</p></td>";

            if (rows == 1) {
                new_table += "<tr>" + cell;
            } else if (rows == 5) {
                new_table += cell + "<tr>";
                rows = 0;
            } else {
                new_table += cell;
            }
        });
    }

});

old_table.html(new_table);
old_table.removeClass( "aa_catalog" ).addClass( "kl_materials" );
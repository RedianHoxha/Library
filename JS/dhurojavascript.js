var Libraria =[];
var i = 1;
var grid;
var id,Isbn,titull,autor,zhanri,pershkrim,cmimi;
var renderer;

var isdelete=false;
renderer = function (value, record, $cell, $displayEl, idel) {

    var $editBtn = $('<i class="fa fa-pencil gj-cursor-pointer" data-key="' + idel + '"></i>'),
        $updateBtn = $('<i class="fa fa-save gj-cursor-pointer" data-key="' + idel + '"></i>').hide();
        $editBtn.on('click', function (e) {
        grid.edit($(this).data('key'));
        $editBtn.hide();
        $updateBtn.show();
    });
    $updateBtn.on('click', function (e) {
        grid.update($(this).data('key'));
        $editBtn.show();
        $updateBtn.hide();
    });
    $displayEl.append($editBtn).append($updateBtn);
}


$(document).ready(function () {

    grid = $('#grid').grid({
        primaryKey: 'ID',
        dataSource: this.Libraria,
        inlineEditing: { mode: 'command', managementColumn: false },
        columns: [
            { field: 'ID'},
            { field: 'ISBN', sortable: true,editor: true },
            { field: 'Titulli', sortable: true ,editor: true},
            { field: 'Autori', sortable: true ,editor: true},
            { field: 'Pershkrimi', sortable: true ,editor: true},
            { field: 'Zhanri', sortable: true ,editor: true},
            { field: 'Cmimi',editor: true},
            { width: 56, align: 'center', renderer: renderer },
            { width: 64, tmpl: '<span class="material-icons gj-cursor-pointer">delete</span>', align: 'center', events: { 'click': Delete } }
        ],
    });
    renderer = function (value, record, $cell, $displayEl, idel) {
        var $editBtn = $('<i class="fa fa-pencil gj-cursor-pointer" data-key="' + idel + '"></i>'),
            $updateBtn = $('<i class="fa fa-save gj-cursor-pointer" data-key="' + idel + '"></i>').hide();
            $editBtn.on('click', function (e) {
            grid.edit($(this).data('key'));
            $editBtn.hide();
            $updateBtn.show();
        });
        $updateBtn.on('click', function (e) {
            grid.update($(this).data('key'));
            $editBtn.show();
            $updateBtn.hide();
        });
        $displayEl.append($editBtn).append($updateBtn);
    }
    
   

});   




function Delete(e) {
    isdelete=true;
    if (confirm('Are you sure?')) {
        isdelete=true;
        grid.removeRow(e.data.id);
        grid.clear();
        grid.reload();
               
    }
}



function Save() {
    var record = {
        'ID':i,
        'ISBN': $('#isbn').val(),
        'Titulli': $('#titull').val(),
        'Autori': $('#autor').val(),
        'Pershkrimi': $('#pershkrim').val(),
        'Zhanri':$( "#zhanri" ).val(),
        'Cmimi': $('#cmim').val(),
    };
    isdelete=false;
    Libraria.push(record);
    grid.addRow(record);
    grid.clear();
    grid.reload();
    
    i++;
    clear();
}


function returnLibrari(){
    return this.Libraria;
}


function clear()
{
     document.getElementById("isbn").value="";
     document.getElementById("titull").value="";
     document.getElementById("autor").value="";
     document.getElementById("pershkrim").value="";
    var e = document.getElementById("zhanri");
    var zhanrilibrit = e.options[e.selectedIndex].value;
    document.getElementById("cmim").value="";

}


var Liber=
{
    isbn : "",
    titull : "",
    autor : "",
    pershkrim : "",
    zhanri : "",
    cmimi : ""
}


function getTable()
{
    var arraymelibra = [];
    var oTable = document.getElementById('grid');
    var rowLength = oTable.rows.length;
    for (i = 1; i < rowLength; i++)
    {
        var row = oTable.rows.item(i).cells;
        //Liber = new Objectliber();
        Liber = {};
        Liber.isbn = row[1].innerText;
        Liber.titull = row[2].innerText;
        Liber.autor = row[3].innerText;
        Liber.pershkrim = row[4].innerText;
        Liber.zhanri = row[5].innerText;
        Liber.cmimi = row[6].innerText;

        arraymelibra.push(Liber);
  
    }

    //alert(arraymelibra.length);  
    $("#test").val(JSON.stringify(arraymelibra));
    localStorage.setItem("libradb",JSON.stringify(arraymelibra));
   
}

function shefi()
{
    alert("JS eshte shefi");
}




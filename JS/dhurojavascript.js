var Libraria =[];
var i = 1;
var grid;
var id,Isbn,titull,autor,zhanri,pershkrim,cmimi;
var renderer;

var isdelete=false;
renderer = function (value, record, $cell, $displayEl, idel) {
    // if(isdelete)
    // {
    //     return ;
    // }
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
            { field: 'Zhanri', sortable: true ,editor: false},
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

// function shfaq()
// {
  
//     var isbn = document.getElementById("isbn").value;
//     var titulli = document.getElementById("titull").value;
//     var autori = document.getElementById("autor").value;
//     var pershkrimi = document.getElementById("pershkrim").value;
//     var e = document.getElementById("zhanri");
//     var zhanrilibrit = e.options[e.selectedIndex].value;
//     var cmim= document.getElementById("cmim").value;



//     var table = document.getElementById("grid");
 
//     var row = table.insertRow(i);

//     var id=row.insertCell(0);
//     var Isbn = row.insertCell(1);
//     var titull = row.insertCell(2);
//     var autor = row.insertCell(3);
//     var zhanri = row.insertCell(4);
//     var pershkrim = row.insertCell(5);
//     var cmimi = row.insertCell(6);
//     var actionedit =row.insertCell(7);

//     id.innerHTML=i;
//     Isbn.innerHTML = isbn;
//     titull.innerHTML = titulli;
//     autor.innerHTML = autori;
//     pershkrim.innerHTML =pershkrimi;
//     zhanri.innerHTML = zhanrilibrit;
//     cmimi.innerHTML =cmim;
//     actionedit.innerHTML= "<button id='btnEdit' onclick='edito()';>Edit</button> <button id='btndelete' onclick='Delete("+(i)+",event)';>Delete</button>";
//     i=i+1;
//     clear();
// }

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





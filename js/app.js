$(document).ready(function(){
    $('#datatable').DataTable();
    $('.dataTables_length').addClass('bs-select');
    $("#error").modal('show');
    //$("#formEditDoor").modal('show');
    //$( document ).on( "click", ".btndel", function() {
         // $('#formEditDoor').modal('show');
     // });
 

    $('#formEditDoor').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var namephone = button.data('namephone')
        var name = button.data('name')
        var IMEI = button.data('imei')
        var NumbPhone = button.data('numbphone')
        var id = button.data('id')
        var Door = button.data('door')  
        var modal = $(this)
        modal.find('#id').val(id);
        modal.find('#NamePhone').val(namephone);
        modal.find('#Name').val(name);
        modal.find('#txtEmi').val(IMEI);
        modal.find('#phone').val(NumbPhone);
        modal.find('#txtDoor').val(Door);
        
        
      })


      $('#del').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
       
        var modal = $(this)
        modal.find('#id').val(id);
        $( document ).on( "click", "#btndel", function() {
          $('#del').modal('hide');
      });

      })
     
});

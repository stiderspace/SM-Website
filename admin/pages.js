function listPages() {
  clearContainer();

  var table = $("<table></table>");
  $(table).attr('class', 'table');
  $(".container").append(table);

  var thead = $('<thead></thead>')
  $(thead).html(`<tr>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Edit</td>
                  </tr>`);
  $(table).append(thead);

  var tbody = $('<tbody></tbody>');
  $(table).append(tbody);

  $.getJSON('../api/?t=page&a=getAll', function(data) {
    $.each(data, function(key, value) {
      var tr = $("<tr></tr>");
      var name = $("<td></td>");
      var image_url = $("<td></td>");

      var editLink = $("<td></td>");
      $(editLink).html("<a>edit</a>");
      $(editLink).attr("onclick", "editPage(" + value.id + ")");

      /* var deleteLink = $("<a></a>");
      $(editLink).html("edit");
      $(editLink).attr("onclick", "deletePage(" + value.id + ")"); */

      $(name).html(value.name);
      $(image_url).html(value.image_url);

      $(tr).append(name);
      $(tr).append(image_url);
      $(tr).append(editLink);
      // $(tr).append(deleteLink);

      $(tbody).append(tr);
    });
  });
}

function editPage(id) {
  clearContainer();

  var form = $("<form></form>");
  $(form).attr('method', 'POST');
  $(form).attr('action', '../api/index.php?t=page&a=update&i=' + id);
  $(form).attr('enctype', 'multipart/form-data');

  var nameLabel = $("<label></label>");
  $(nameLabel).html("Name");
  var nameInput = $("<input />");
  $(nameInput).attr('name', 'name');
  var imageLabel = $("<label></label>");
  var image = $("<img />");
  $(imageLabel).append(image);
  var imageInput = $("<input></input>");
  $(imageInput).attr('type', 'file');
  $(imageInput).attr('accept', 'image/*');
  $(imageInput).attr('name', 'image_url');

  $.getJSON('../api/?t=page&a=get&i=' + id, function(data) {
    $(nameInput).attr('value', data[0].name);
    $(image).attr('src', '../img/' + data[0].image_url);
    $(imageInput).attr('value', data[0].image_url);
  });

  var submit = $('<input></input>');
  $(submit).attr('type', 'submit');
  $(submit).html("update");

  $(form).append(nameLabel);
  $(form).append(nameInput);
  $(form).append(imageLabel);
  $(form).append(imageInput);
  $(form).append(submit);
  $('.container').append(form);
}

function deletePage(id, tr) {
  /* $.ajax({
    url: '../api/?t=page'
  }); */
}

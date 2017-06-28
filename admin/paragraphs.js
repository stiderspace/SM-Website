function listParagraphs() {
  clearContainer();

  var table = $("<table></table>");
  $(table).attr('class', 'table');
  $(".container").append(table);

  var thead = $('<thead></thead>')
  $(thead).html(`<tr>
                    <td>Title</td>
                    <td class="mobile-hidden">Body</td>
                    <td>Image</td>
                    <td class="mobile-hidden">Type</td>
                    <td>Page</td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>`);
  $(table).append(thead);


  var tbody = $('<tbody></tbody>');
  $(table).append(tbody);

  $.getJSON('../api/?t=paragraph&a=getAll', function(data) {
    $.each(data, function(key, value) {
      var tr = $("<tr></tr>");
      var title = $("<td></td>");
      var body = $("<td></td>");
      $(body).addClass('mobile-hidden');
      var image = $("<td></td>");
      var type = $('<td></td>');
      $(type).addClass('mobile-hidden');
      var page = $('<td></td>');
      var edit = $('<td></td>');
      var del = $('<td></td>');

      $(title).html(value.title);
      $(body).html(value.body);
      $(image).html(value.image_url);
      $(type).html(value.type);
      $(page).html(getPageName(value.page_id));

      var editLink = $("<td></td>");
      $(editLink).html("<a>edit</a>");
      $(editLink).click(function() { editParagraph(value.id); });
      var deleteLink = $("<td></td>");
      $(deleteLink).html("<a>delete</a>");
      $(deleteLink).click(function() { deleteParagraph(value.id, tr); });

      $(tr).append(title);
      $(tr).append(body);
      $(tr).append(image);
      $(tr).append(type);
      $(tr).append(page);
      $(tr).append(editLink);
      $(tr).append(deleteLink);

      $(tbody).append(tr);
    });
  });

  var addNew = $('<a></a>');
  $(addNew).attr('type', 'submit');
  $(addNew).attr('onclick', 'newParagraph');
  $('.container').append(addNew);
}

function createParagraph() {
  clearContainer();

  var form = $("<form></form>");
  $(form).attr('method', 'POST');
  $(form).attr('action', '../api/index.php?t=paragraph&a=create');

  var titleLabel = $("<label></label>");
  $(titleLabel).html("Titel");
  var titleInput = $("<input />");
  $(titleInput).attr('name', 'title');
  $(titleInput).addClass('form-control');

  var bodyLabel = $("<label></label>");
  $(bodyLabel).html("Alinea")
  var bodyInput = $("<textarea/>");
  $(bodyInput).attr('name', 'body');
  $(bodyInput).addClass('form-control');

  var imageLabel = $("<label></label>");
  $(imageLabel).html("Afbeelding");
  var image = $("<img />");
  $(imageLabel).append(image);
  var imageInput = $("<input></input>");
  $(imageInput).addClass('form-control');
  $(imageInput).attr('type', 'file');
  $(imageInput).attr('accept', 'image/*');
  $(imageInput).attr('name', 'image_url');

  var typeLabel = $("<label></label>");
  $(typeLabel).html("Type");
  var typeInput = $("<select></select>")
  $(typeInput).addClass('form-control');
  $(typeInput).html(` <option value="1">intro</option>
                      <option value="2">left-photo</option>
                      <option value="3">right-photo</option>
                      <option value="4">normal (full width)</option>
                      <option value="5">normal without title (full width)</option>`);

  var pageLabel = $("<label></label>");
  $(pageLabel).html("Pagina");
  var pageInput = $("<select></select>")
  $(pageInput).attr('name', 'page_id')
  $(pageInput).addClass('form-control');
  $(pageInput).html(` <option value="1">Home</option>
                      <option value="2">Programma</option>
                      <option value="3">Opleiding in beeld</option>
                      <option value="4">Werk van studenten</option>
                      <option value="5">Studenten</option>
                      <option value="6">Haarlem</option>`);

  var submit = $('<input></input>');
  $(submit).attr('type', 'submit');
  $(submit).html("update");

  $(form).append(titleLabel);
  $(form).append(titleInput);

  $(form).append(bodyLabel);
  $(form).append(bodyInput);

  $(form).append(imageLabel);
  $(form).append(imageInput);

  $(form).append(typeLabel);
  $(form).append(typeInput);

  $(form).append(pageLabel);
  $(form).append(pageInput);

  $(form).append(submit);
  $('.container').append(form);
}

/**
  * Displays a paragraph form pre-filled
  * @param id Id of the paragraph
  */
function editParagraph(id) {
  clearContainer();

  var form = $("<form></form>");
  $(form).attr('method', 'POST');
  $(form).attr('action', '../api/index.php?t=paragraph&a=update&i=' + id);

  var titleLabel = $("<label></label>");
  $(titleLabel).html("Titel");
  var titleInput = $("<input />");
  $(titleInput).attr('name', 'title');
  $(titleInput).addClass('form-control');

  var bodyLabel = $("<label></label>");
  $(bodyLabel).html("Alinea")
  var bodyInput = $("<textarea/>");
  $(bodyInput).attr('name', 'body');
  $(bodyInput).addClass('form-control');

  var imageLabel = $("<label></label>");
  $(imageLabel).html("Afbeelding");
  var image = $("<img />");
  $(imageLabel).append(image);
  var imageInput = $("<input></input>");
  $(imageInput).addClass('form-control');
  $(imageInput).attr('type', 'file');
  $(imageInput).attr('accept', 'image/*');
  $(imageInput).attr('name', 'image_url');

  var typeLabel = $("<label></label>");
  $(typeLabel).html("Type");
  var typeInput = $("<select></select>")
  $(typeInput).addClass('form-control');
  $(typeInput).html(` <option value="1">intro</option>
                      <option value="2">left-photo</option>
                      <option value="3">right-photo</option>
                      <option value="4">normal (full width)</option>
                      <option value="5">normal without title (full width)</option>`);

  var pageLabel = $("<label></label>");
  $(pageLabel).html("Pagina");
  var pageInput = $("<select></select>")
  $(pageInput).attr('name', 'page_id')
  $(pageInput).addClass('form-control');
  $(pageInput).html(` <option value="1">Home</option>
                      <option value="2">Programma</option>
                      <option value="3">Opleiding in beeld</option>
                      <option value="4">Werk van studenten</option>
                      <option value="5">Studenten</option>
                      <option value="6">Haarlem</option>`);

  var submit = $('<input></input>');
  $(submit).attr('type', 'submit');
  $(submit).html("update");

  $.getJSON('../api/?t=paragraph&a=get&i=' + id, function(data) {
    $(titleInput).attr('value', data[0].title);
    $(bodyInput).html(data[0].body);
    $(image).attr('src', '../img/' + data[0].image_url);
    $(imageInput).attr('value', data[0].image_url);
    $(typeInput).attr('value', data[0].type);
    $(pageInput).attr('value', data[0].page_id);
  });

  $(form).append(titleLabel);
  $(form).append(titleInput);

  $(form).append(bodyLabel);
  $(form).append(bodyInput);

  $(form).append(imageLabel);
  $(form).append(imageInput);

  $(form).append(typeLabel);
  $(form).append(typeInput);

  $(form).append(pageLabel);
  $(form).append(pageInput);

  $(form).append(submit);
  $('.container').append(form);
}

function deleteParagraph(id, tr) {
  $.ajax({
    url: '../api/?t=paragraph&a=delete&i=' + id,
    method: 'GET',
    succes: listParagraphs()
  });
}

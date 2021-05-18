const SERVER_PORT = 8000;

$(document).ready(function () {
  console.log("ready!");
  var USER_ID = document.getElementById("session-id").innerHTML;

  fetch(`http://localhost:${SERVER_PORT}/api/todos/show/${USER_ID}`)
    .then((response) => response.json())
    .then((todos) => {
      console.log(todos);
      $.each(todos, (index, todo) => {
        addTodo(todo);
      });
    });

  $("#form-add").submit(function (event) {
    // form event cancelen
    event.preventDefault();

    // Krijg waarde van textfield
    let titleInput = event.target[0].value;

    // Todo fetchen (dit kon ook met jquerry $.post, maar ik kreeg steed lege bodys op de server)
    fetch(`http://localhost:${SERVER_PORT}/api/todos/create/${USER_ID}`, {
      method: "post",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ title: titleInput }),
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log(data);
        // field input resetten
        event.target[0].value = "";
        addTodo(data.todo);
      });
  });

  function addTodo(todo) {
    var todoContainer = document.getElementById("todo-container");
    var div = document.createElement("div");
    div.setAttribute("class", "card mx-auto col-lg-5");

    var div2 = document.createElement("div");
    div2.setAttribute("class", "card-body d-flex align-items-center");

    var h6 = document.createElement("h6");
    h6.setAttribute("class", "card-title m-0 me-2 text-wrap");
    h6.innerHTML = todo.title;

    var button = document.createElement("button");
    button.setAttribute(
      "class",
      "btn ms-auto d-flex align-items-center justify-content-center border border-success"
    );

    var span = document.createElement("span");
    span.setAttribute("class", "material-icons text-success");
    span.innerHTML = "done_outline";

    button.appendChild(span);

    div2.appendChild(h6);
    div2.appendChild(button);

    var div3 = document.createElement("div");
    div3.setAttribute("class", "card-footer");
    div3.innerHTML = `<small class="text-muted">${todo.date}</small>`;

    div.appendChild(div2);
    div.appendChild(div3);
    todoContainer.appendChild(div);

    // delete/voltooi knop event listenen
    button.addEventListener("click", function (event) {
      console.log("ik wil deleten met id", todo.id);

      fetch(`http://localhost:${SERVER_PORT}/api/todos/delete/${todo.id}`, {
        method: "delete",
        headers: {
          "Content-Type": "application/json",
        },
        // body: JSON.stringify({ title: titleInput }),
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          console.log(data);
          if (todo.id == data.todo.id) {
            todoContainer.removeChild(div);
          }
        });
    });
  }
});

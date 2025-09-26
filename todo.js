function addTask() {
  let taskInput = document.getElementById("taskInput");
  let taskText = taskInput.value.trim();
  if (taskText === "") return;

  let li = document.createElement("li");
  li.textContent = taskText;

  
  let doneBtn = document.createElement("button");
  doneBtn.textContent = "Done";
  doneBtn.style.marginLeft = "10px";
  doneBtn.onclick = () => {
    li.style.textDecoration = "line-through";
  };

  
  let deleteBtn = document.createElement("button");
  deleteBtn.textContent = "Delete";
  deleteBtn.style.marginLeft = "5px";
  deleteBtn.onclick = () => {
    li.remove();
  };

  li.appendChild(doneBtn);
  li.appendChild(deleteBtn);
  document.getElementById("taskList").appendChild(li);

  taskInput.value = "";
}

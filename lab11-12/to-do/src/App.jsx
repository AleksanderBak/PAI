import React, { useState } from "react";
import Filter from './components/Filter'
import NewTask from './components/NewTask'
import ToDo from './components/ToDo'

function App(props) {
  const [tasks, setTasks] = useState(props.tasks);
  const [isChecked, setIsChecked] = useState(false);

  function addTask(name) {
    const newTask = {id: tasks.length + 1, name, completed: false, visible: "visible"};
    setTasks([...tasks, newTask]);
  }

  function filterList(c) {
    for(let i = 0; i < tasks.length; i++) {
      if (tasks[i].completed == true && c == true) {
        tasks[i].visible = "hidden";
      } else {
        tasks[i].visible = "visible";
      }
    }
  }

  function changeCompleted(id) {
    const updatedTasks = tasks.map((task) => {
      if (id === task.id) {
        return {...task, completed: !task.completed}
      }
      return task;
    });
    setTasks(updatedTasks);
  }

  const handleCheckboxClick = () => {
    setIsChecked(!isChecked);
    filterList(!isChecked);
  };

  const taskList = tasks.map((task) => (
    <ToDo id={task.id} name={task.name} completed={task.completed} key={task.id} visible={task.visible} changeCompleted={changeCompleted}/>
  ));

  return (
    <div className='main'>
      <Filter isChecked={isChecked} onCheckboxClick={handleCheckboxClick}/>
      <div className="list">
        <ul>
          {taskList}
        </ul>
      </div>
      <NewTask addTask={addTask}/>
    </div>
  )
}

export default App

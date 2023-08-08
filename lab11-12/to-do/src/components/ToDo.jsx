import React from "react";

function ToDo(props) {
  return (
    <li className={`${props.visible}`}><input type="checkbox" defaultChecked={props.completed} onChange={() => props.changeCompleted(props.id)}/>{props.name}</li>
  );
}

export default ToDo;
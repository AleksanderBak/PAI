import React from "react";

function Filter(props) {
  const { isChecked, onCheckboxClick } = props;

  const handleCheckboxClick = () => {
    onCheckboxClick();
  };

  return (
    <div className="header">
        <h1>Welcome to my todo list!</h1>
        <form action="">
          Hide completed<input type="checkbox" checked={isChecked} onClick={handleCheckboxClick}/>
        </form>
    </div>
  );
}

export default Filter;
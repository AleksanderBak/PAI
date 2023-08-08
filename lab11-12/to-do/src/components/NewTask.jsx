import React, { useState } from "react";

function NewTask(props) {
    const [name, setName] = useState('');

    function handleSubmit(e) {
        e.preventDefault();
        props.addTask(name);
        setName('')
    }
    function handleChange(e) {
        setName(e.target.value);
        console.log("Typing");
    }

    function handleKeyPress(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        props.addTask(name);
        setName('')
      }
    }
    return (
    <div className="add_item">
        <form onSubmit={e => { e.preventDefault(); }}>
          <input type="text" name="" id="inp" value={name} onChange={handleChange} onKeyPress={(e) => handleKeyPress(e)}/>
          <input type="button" value="Add" onClick={handleSubmit} />
        </form>
    </div>
  );
}

export default NewTask;
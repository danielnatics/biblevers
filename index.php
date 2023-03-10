<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bible Verse</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      body {
        background-color: #060d1a;
        display: flex;
        width: 100%;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding-left: 2px;
        padding-right: 2px;
      }
      #check {
        font-size: 2rem;
        position: relative;
      }
      .container {
        /* display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center; */
        flex-direction: column;
        width: 100%;
      }
      .section {
        line-height: 75px;
        text-align: center;
        background-color: #316f7d;
        padding: 15px;
        width: 100%;
        border-radius: 15px;
      }
      input {
        text-transform: uppercase;
        width: 100%;
        height: 50px;
        font-size: 1.5rem;
      }

      .btn {
        background-color: #c5d3eb;
        width: 150px;
        height: 34px;
        border: none;
        border-radius: 7px;
        padding: 2px 5px 5px 5px;
        cursor: pointer;
        transition: 0.5s ease-in-out;
      }
      .btn:hover {
        color: #0a101a;
      }
      .text {
        width: 100%;
        padding-left: 15px;
        outline: none;
        border: 2px solid #ccc;
        border-radius: 10px;
        color: black;
        transition: 0.5s ease;
      }
      .text:focus {
        border: 2px solid black;
      }
      .text:hover {
        border: 2px solid black;
      }
      span {
        font-size: 1.5rem;
        margin-left: 5px;
      }
      span a {
        color: burlywood;
      }
      .alert {
        visibility: hidden;
        line-height: 1;
      }
      .warn-style {
        visibility: visible;
        color: black;
        fill-opacity: 0.2;
        font-size: 1.5rem;
        font-style: italic;
      }
      h1 {
        color: #dfe1e6;
        font-size: 3em;
        font-family: cursive;
      }
      @media (max-width: 700px) {
        input {
          text-transform: uppercase;
          width: 100%;
          height: 45px;
          font-size: 0.8rem;
        }
        .text {
          width: 100%;
          padding-left: 3px;
          outline: none;
          border: 2px solid #ccc;
          border-radius: 7px;
          color: black;
          transition: 0.4s ease;
        }
        .alert {
        }
        .warn-style {
          visibility: visible;
          color: rgba(85, 0, 0, 0.872);
          fill-opacity: 0.2;
          font-size: 1.2rem;
          font-style: italic;
        }
        h1 {
          color: #dfe1e6;
          font-size: 1.5em;
          font-family: cursive;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Bible verse</h1>
      <div class="section">
        <form onsubmit="submit()">
          <input
            type="text"
            placeholder="User Id: First Book of the Bible"
            id="firstname"
            class="text"
          />
          <input
            type="password"
            placeholder="Password: from 1-8"
            id="password"
            class="text"
          />
          <input
            type="submit"
            value="LOGIN"
            onclick="work()"
            id="enter"
            class="btn"
          />
          <p class="alert"></p>
        </form>
      </div>
    </div>

    <script>
      const pass = document.getElementById("password");
      const warn = document.querySelector(".alert");
      const enter = document.getElementById("enter");
      const check = docucument.getElementById("check");
      const hint = document.querySelector(".hint");

      function showHint() {
        // hint.classList.add("showhint");
        hint.textContent =
          " User id: any chapter of the Bible <br />password: 1-8";
      }

      // let timeOut = setTimeout(popo, 3000);
      // function popo() {
      //   setTimeout(popo, 3000);
      //   warn.textContent = "Username or Password not found";
      // }
      // clearTimeout(popo, 3000);
      function ofFunction() {
        setTimeout(function () {
          warn.textContent = "";
        }, 1800);
      }

      function work() {
        const name = document.getElementById("firstname");
        const pass = document.getElementById("password");
        event.preventDefault();

        if (name.value == "GENESIS" || pass.value == 12345678) {
          // alert("Login Successful");
          window.location.href = "landing.html";
          name.value = "";
          pass.value = "";
        } else if (name.value == "" && pass.value == "") {
          warn.classList.add("warn-style");
          warn.textContent = "Enter Username or Password";
          ofFunction();
          name.value = "";
          pass.value = "";
        } else {
          warn.classList.add("warn-style");
          warn.textContent = "Username or Password is not correct";
          ofFunction();
          name.value = "";
          pass.value = "";
        }
      }

       
 
      function showPass() {
        if (pass.type === "password") {
          pass.type = "text";
        } else {
          pass.type = "password";
        }
      }
    </script>
  </body>
</html>


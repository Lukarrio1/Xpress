@extends('layouts.admin')
@section('content')

<style>
.inbox {
  background: url("https://picsum.photos/3000/3000");
  background-size: cover;
  background-position: 50% 50%;
  min-height: 100vh;
  display: flex;
}
.inbox aside {
  display: flex;
  padding-right: 20px;
  min-height: 100%;
  transition: all ease-in-out 0.2s;
}
.inbox aside ul {
  padding-left: 0;
}
.inbox aside ul li {
  list-style-type: none;
  cursor: pointer;
  padding: 10px 25px;
  font-size: 14px;
  font-weight: bold;
  color: #000;
  padding-left: 25px;
  flex-grow: 1;
  flex-shrink: 1;
  margin: 10px 0;
}
.inbox aside ul li:hover {
  color: #fff;
  background: rgba(255, 255, 255, 0.3);
  border-radius: 0 10px 10px 0;
}
.inbox aside ul li i {
  color: #000;
  margin-right: 10px;
  font-size: 20px;
}
.inbox aside ul li i:hover {
  color: #d7d5d8;
}
.inbox aside ul li:first-child {
  background: rgba(255, 255, 255, 0.3);
  border-radius: 0 10px 10px 0;
}
.inbox .messages {
  flex-grow: 2;
  overflow: hidden;
  position: relative;
  margin: 0 10px;
  flex-wrap: wrap;
  justify-content: space-around;
}
.inbox .messages .message {
  width: 100%;
  top: 0;
  right: 50%;
  -webkit-transform: translateY(50%);
          transform: translateY(50%);
  background: rgba(255, 255, 255, 0.5);
  margin-bottom: 1px;
  border: 1px solid #bfbebe;
  cursor: pointer;
  vertical-align: middle;
  padding: 15px;
  display: flex;
}
.inbox .messages .message li {
  list-style: none;
}
.inbox .messages .emotions {
  flex-grow: 1;
  flex-direction: flex-start;
}
.inbox .messages .sender {
  flex-grow: 1;
  justify-content: flex-start;
}
.inbox .messages .title {
  flex-grow: 2;
  flex-direction: flex-end;
}
.inbox .messages .date {
  flex-grow: 1;
  flex-direction: flex-end;
}
.inbox .messages .date span {
  font-weight: bold;
}


</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inbox</title>
</head>
<body>
  <main class='inbox'>
    <aside>
      <ul>
        <li>
          <i class="fa fa-inbox" aria-hidden="true"></i> Inbox <span>1024</span>
        </li>
        <li>
          <i class="fa  fa-star" aria-hidden="true"></i> Starred 
        </li>
        <li>
          <i class="fa fa-clock-o"></i> Snoozed 
        </li>
        <li>
          <i class="fa fa-inbox" aria-hidden="true"></i> Important 
        </li>
        <li>
          <i class="fa fa-inbox" aria-hidden="true"></i> Sent 
        </li>
        
      </ul>
    </aside>
    <section class="messages">
      

      
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>

      
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>
      <ul class="message">
        <li class="emotions">
          <span>
           <input type="checkbox">
          </span>
          <span><i class="fa fa-star-o" aria-hidden="true"></i>
</span>
        </li>
        <li class='sender'>
          <b>Usplash Team</b>
        </li>
        <li class="title">
          <b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.                 Qui, corporis vitae inventore odit 
          </b>
        </li>
        <li class="date">
          <span>
            4 Dec
          </span>
        </li>
      </ul>



      
      
    </section>
  </main>
</body>

    
@endsection

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('Home')}}">Office Management</a>
    </div>
    <ul class="nav navbar-nav">
     
      
      
      <?php if(Session::has('freelance_id')) {?>
 


         <li><a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a></li>
         <li><a href="{{route('freelancerDash')}}" class="btn btn-dark btn-sm" role="button"> Dashboard</a></li>
         <li><a href="{{route('logout')}}" class="btn btn-dark btn-sm" role="button"> Logout</a></li>
      <?php    
    
      }


      else if(Session::has('admin_id')) { ?>
 
      <li><a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a></li>

        <li><a href="{{route('AdminDash')}}" class="btn btn-dark btn-sm" role="button"> Dashboard</a></li>

        <li><a href="{{route('UserList')}}" class="btn btn-dark btn-sm" role="button"> User List</a></li>

        <li><a href="{{route('logout')}}" class="btn btn-dark btn-sm" role="button"> Logout</a></li>
      <?php    
    
      }

       else  {?>
       <li><a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a></li>

       <li class="nev-item dropdown">
<a class="nav-link dropdown-toggle btn-sm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Sign Up</a>
<div class="dropdown-menu " aria-labelledby="navbarDropdown">

<a class="dropdown-item btn btn-dark btn-sm" href="{{route('admin.registration')}}">Admin</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item btn btn-dark btn-sm" href="{{route('Registration')}}">Employer</a>
</div>

       <li><a href="{{route('login')}}" class="btn btn-dark btn-sm" role="button"> Sign In</a></li>
    
        <?php } ?>







</li>


    </ul>
  </div>
</nav>





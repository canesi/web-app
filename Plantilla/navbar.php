<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CISystem</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="administrador.php">Dashboard</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nuevo <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Contacto</a></li>
          <li><a href="NuevoCliente.php">Cliente</a></li>
          <li><a href="#">Usuario</a></li>
          <li><a href="#">Role</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consultar <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Citas</a></li>
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Usuarios</a></li>
          <li><a href="#">Roles</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
      <?php echo $username ?>
      </a>
      <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider">
          </li>
          <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
      </ul>
      </li>
    </ul>
  </div>
</nav>

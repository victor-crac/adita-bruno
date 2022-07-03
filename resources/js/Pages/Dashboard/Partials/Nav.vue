<template>
        <div class="dashboard-navbar">
            <div class="d-user-avater">
              <!-- {{ JSON.stringify($page.props)}} -->
              <h4> {{ $page.props.auth.user }}  </h4>
              <small>   {{ $page.props.user.roles }} </small>
              <span><Link href="/logout" method="post">Log Out</link></span>
            </div>

            <div class="d-navigation">
              <ul id="side-menu">
                <li class="active">
                  <Link href="/dashboard"><i class="ti-user"></i>Dashboard</Link>
                </li>
                <li>
                   <Link href="/dashboard/causes"><i class="ti-heart"></i>Campaigns</Link>
                   <Link href="/logout" method="post" ><i class="ti-heart"></i>Logout</Link>
                </li>
              </ul>
            </div>
          </div>
</template>

<script>
export default {
    name:"SideBar",
    props:['auth','user'],
}
</script>

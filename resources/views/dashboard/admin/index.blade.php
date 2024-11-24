@extends('dashboard.master')

@section('title')
    Admins
@endsection

@section('content')


<div id="app">

    <nav id="navbar-main" class="navbar is-fixed-top">
      
      <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
      </div>
      <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item dropdown has-divider has-user-avatar">
            <a class="navbar-link">
              <div class="user-avatar">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
              </div>
              <div class="is-user-name"><span>John Doe</span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="navbar-dropdown">
              <a href="profile.html" class="navbar-item">
                <span class="icon"><i class="mdi mdi-account"></i></span>
                <span>My Profile</span>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Log Out</span>
              </a>
            </div>
          </div>
         
       
        </div>
      </div>
    </nav>
    
    
    
    
    
    <section class="is-hero-bar">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
          Our Admins
        </h1>
        <a href="{{ route('admin.create') }}"><button type="button" class="button light"><i
            class="far fa-plus"></i> Create</button></a>
      </div>
    </section>
    
      <section class="section main-section">
      
       
    
      
    
        <div class="card has-table">
          <div class="card-content">
            <table style="width: 100%; table-layout: fixed;">
              <thead>
                  <tr>
                    <th style="padding: 10px; text-align: left;">Image</th>
                      <th style="padding: 10px; text-align: left;">Name</th>
                      <th style="padding: 10px; text-align: left;">Email</th>
                      <th style="padding: 10px; text-align: left;">Phone</th>
                      
                      {{-- <th style="padding: 10px; text-align: left;">Password</th> --}}
                      <th style="padding: 10px; text-align: left; width: 150px;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($admins as $admin)
                      <tr>
                        <td><a href="#"><img style="border-radius: 50%; height:100px" src="{{ url('/images/' . $admin->image) }}" width="100px"
                            height="100px" alt="Avatar"></a></td>
                          <td style="padding: 10px;">{{ $admin->name }}</td>
                         
                            <td style="padding: 10px;">{{ $admin->email }}</td>
                          <td style="padding: 10px;">{{ $admin->phone }}</td>
                          {{-- <td style="padding: 10px;">{{ $admin->password }}</td> --}}
                          <td style="padding: 10px;">
                            <div style="display: flex; justify-content: flex-start; gap: 10px;">
                              {{-- <a href="{{route('admin.edit', $admin->id) }}" style="text-decoration: none;">
                                <button class="button small green" type="button" style="font-size: 14px; padding: 5px 10px;">
                                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                                </button>
                            </a> --}}
                            
                          
                              <form action="{{route('admin.destroy', $admin->id) }}" method="POST" style="margin: 0; padding: 0;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="button small red" style="font-size: 14px; padding: 5px 10px;">
                                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                  </button>
                              </form>
                          </div>
                          
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          
            {{-- <div class="table-pagination">
              <div class="flex items-center justify-between">
                <div class="buttons">
                  <button type="button" class="button active">1</button>
                  <button type="button" class="button">2</button>
                  <button type="button" class="button">3</button>
                </div>
                <small>Page 1 of 3</small>
              </div>
            </div> --}}
          </div>
        </div>
    
        
    
      
      </section>
    
    
    
    
    
    </div>


@endsection
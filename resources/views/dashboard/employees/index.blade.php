@extends('dashboard.master')

@section('title')
    Progress
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
              {{-- <div class="user-avatar">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
              </div> --}}
              <div class="is-user-name"><span>DAMAN</span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="navbar-dropdown">
              <hr class="navbar-divider">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="navbar-item" style="background: none; border: none; cursor: pointer;">
                      <span class="icon"><i class="mdi mdi-logout"></i></span>
                      <span>Log Out</span>
                  </button>
              </form>
          </div>
          </div>
         
       
        </div>
      </div>
    </nav>
    
    
    
    
    
    <section class="is-hero-bar">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
          Our Porgress
        </h1>
        <a href="{{ route('employees.create') }}"><button type="button" class="button light"><i
            class="far fa-plus"></i> Create</button></a>
      </div>
    </section>
    
      <section class="section main-section">
      
       
    
      
    
        <div class="card has-table">
          <div class="card-content">
            <table style="width: 100%; table-layout: fixed;">
              <thead>
                  <tr>
                      <th style="padding: 10px; text-align: left;">ID</th>
                      <th style="padding: 10px; text-align: left;">Image</th>
                      <th style="padding: 10px; text-align: left;">Description</th>
                      {{-- <th style="padding: 10px; text-align: left;">description</th> --}}
                      <th style="padding: 10px; text-align: left; width: 150px;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($employees as $employee)
                      <tr>
                          <td style="padding: 10px;">{{ $employee->id }}</td>
                         
                          <td><a href="#"><img style="border-radius: 5%; height:100px"  src="{{ url('/images/' . $employee->image) }}" width="100px"
                            height="100px" alt="Avatar"></a></td>
                            <td style="padding: 10px;">{{ $employee->name }}</td>
                          {{-- <td style="padding: 10px;">{{ $employee->description }}</td> --}}
                          <td style="padding: 10px;">
                            <div style="display: flex; justify-content: flex-start; gap: 10px;">
                              <a href="{{route('employees.edit', $employee->id) }}" style="text-decoration: none;">
                                <button class="button small green" type="button" style="font-size: 14px; padding: 5px 10px;">
                                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                                </button>
                            </a>
                            
                          
                              <form action="{{route('employees.destroy', $employee->id) }}" method="POST" style="margin: 0; padding: 0;">
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
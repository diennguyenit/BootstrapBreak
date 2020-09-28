@extends('layouts.master')

@section('content')
<!-- banner -->
<section>
    <div class="container-fluid" >
      <div class="row bg-info justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-sm-10 text-center">
          <h1 class="display-2 text-capitablize"><span class="text-warning" style="word-wrap: break-word;">Pure Bootstrap</span><span class="text-light font-weight-bold" style="word-wrap: break-word;">Website</span></h1>
          <h2 class="font-weight-light text-light font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          <a href="#" class="btn bg-warning btn-lg px-4 mx-3">Press Here</a>
          <a href="#" class="btn bg-danger btn-lg text-light px-4 mx-3">Press Here</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of banner -->


  <!-- skills -->
  <section>
    <div class="container-fluid">
      <div class="bg-light p-5">
        <!-- title -->
        <div class="row">
          <div class="col text-center">
            <h1 class="text-warning display-2">Skills</h1>
            <p class="lead text-secondary mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, hic!</p>
          </div>
        </div>
        <!-- end of title -->
        <div class="row text-center">
          <div class="col-lg-4 col-ms-10">
            <i class="fas fa-desktop fa-6x text-warning"></i>
            <h1 class="text-secondary">Development</h1>
            <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!</p>
            <a href="#" class="btn btn-outline-warning text-capitablize mb-3">learn more</a>
          </div>
          <div class="col-lg-4 col-ms-10">
            <i class="far fa-edit fa-6x text-warning"></i>
            <h1 class="text-secondary">Development</h1>
            <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!</p>
            <a href="#" class="btn btn-outline-warning text-capitablize mb-3">learn more</a>
          </div>
          <div class="col-lg-4 col-ms-10">
            <i class="fas fa-cogs fa-6x text-warning"></i>
            <h1 class="text-secondary">Development</h1>
            <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!</p>
            <a href="#" class="btn btn-outline-warning text-capitablize mb-3">learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of skills -->

  <!-- project -->
  <section class="m-5">
    <div class="container-fluid">
      <!-- title -->
      <div class="row">
        <div class="col text-center">
          <h1 class="display-2 text-warning">Project</h1>
          <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, sed?</p>
        </div>
      </div>
      <!-- end of title -->
      <div class="row">
        <div class="col-lg-3 col-sm-6 mx-auto">
          <img src="{{asset('img/project1.jpg')}}" alt="project1" class="img-thumbnail">
          <h1 class="text-secondary">Project 1</h1>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.</p>
        </div>
        <div class="col-lg-3 col-sm-6 mx-auto">
          <img src="{{asset('img/project2.jpg')}}" alt="project1" class="img-thumbnail">
          <h1 class="text-secondary">Project 2</h1>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.</p>
        </div>
        <div class="col-lg-3 col-sm-6 mx-auto">
          <img src="{{asset('img/project3.jpg')}}" alt="project1" class="img-thumbnail">
          <h1 class="text-secondary">Project 3</h1>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.</p>
        </div>
        <div class="col-lg-3 col-sm-6 mx-auto">
          <img src="{{asset('img/project4.jpg')}}" alt="project1" class="img-thumbnail">
          <h1 class="text-secondary">Project 4</h1>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end of project -->

  <!-- team -->
  <section class="m-ms-5 m-2 bg-secondary">
      <div class="container-fluid">
          <!-- title -->
          <div class="row">
              <div class="col text-center mb-3">
                  <h1 class="display-2 text-capitablize text-warning">Team</h1>
                  <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, quis!</p>
              </div>
          </div>
          <!-- end of title -->
          <div class="row">
              <div class="col-md-4 col-sm-5 mx-auto mb-3">
                  <div class="card">
                      <img src="{{asset('img/kid1.jpg')}}" alt="" class="card-img-top">
                      <div class="card-body">
                          <h3 class="card-title text-muted">Michael</h3>
                          <p class="card-subtitle lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nihil.</p>
                          <div class="text-right my-3">
                              <a href="#" class="fab fa-facebook fa-2x mx-2 text-primary"></a>
                              <a href="#" class="fab fa-twitter fa-2x mx-2 text-info"></a>
                              <a href="#" class="fab fa-youtube fa-2x mx-2 text-danger"></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-5 mx-auto mb-3">
                  <div class="card">
                      <img src="{{asset('img/kid2.jpg')}}" alt="" class="card-img-top">
                      <div class="card-body">
                          <h3 class="card-title text-muted">Jack</h3>
                          <p class="card-subtitle lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nihil.</p>
                          <div class="text-right my-3">
                              <a href="#" class="fab fa-facebook fa-2x mx-2 text-primary"></a>
                              <a href="#" class="fab fa-twitter fa-2x mx-2 text-info"></a>
                              <a href="#" class="fab fa-youtube fa-2x mx-2 text-danger"></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-5 mx-auto mb-3">
                  <div class="card">
                      <img src="{{asset('img/kid3.jpg')}}" alt="" class="card-img-top">
                      <div class="card-body">
                          <h3 class="card-title text-muted">Ann</h3>
                          <p class="card-subtitle lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nihil.</p>
                          <div class="text-right my-3">
                              <a href="#" class="fab fa-facebook fa-2x mx-2 text-primary"></a>
                              <a href="#" class="fab fa-twitter fa-2x mx-2 text-info"></a>
                              <a href="#" class="fab fa-youtube fa-2x mx-2 text-danger"></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end of team -->

  <section class="m-5">
      <div class="container-fuild bg-light">
          <!-- title -->
          <div class="row">
              <div class="col text-center">
                  <h1 class="display-2 text-warning text-capitablize">Progress</h1>
                  <p class="lead text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, quibusdam.</p>
              </div>
          </div>
          <!-- end of title -->
          <div class="row justify-content-center">
              <div class="col-md-6 text-secondary col-sm-10">
                  <h1>HTML</h1>
                  <div class="progress bg-secondary mb-3">
                      <div class="progress-bar bg-primary" style="width: 70%;"></div>
                  </div>
                  <h1>CSS</h1>
                  <div class="progress bg-secondary mb-3">
                      <div class="progress-bar bg-warning" style="width: 50%;"></div>
                  </div>
                  <h1>JavaScript</h1>
                  <div class="progress bg-secondary mb-3">
                      <div class="progress-bar bg-danger" style="width: 20%;"></div>
                  </div>
                  <h1>Bootstrap</h1>
                  <div class="progress bg-secondary mb-3">
                      <div class="progress-bar bg-success" style="width: 90%;"></div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@section('content')
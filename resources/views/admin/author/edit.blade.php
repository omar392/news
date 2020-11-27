@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            
<div class="card">
    <div class="card-header">
        <strong class="card-title">Permission Create Page</strong>
    </div>
    <div class="card-body">
      <!-- Credit Card -->
      <div id="pay-invoice">
          <div class="card-body">
            @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach

              </ul>

          </div>
            @endif   
              </div>
              <hr>
              {!! Form::model($author,['route' =>['author-update',$author->id],'method' => 'put']) !!}
                 
                  <div class="form-group">
                      {{ Form::label('name', 'Name', array('class' => 'control-label mb-1')) }}
                    
                      {{ Form::text('name',null,['class'=>'form-control','id'=>'name']) }}
                  </div>

                  
                  <div class="form-group">
                      {{ Form::label('email', 'Email', array('class' => 'control-label mb-1')) }}
                    
                      {{ Form::text('email',null,['class'=>'form-control','id'=>'email']) }}
                  </div>


                  <div class="form-group">
                    {{ Form::label('password', 'Password', array('class' => 'control-label mb-1')) }}
                                              
                    {{ Form::password('password',['class'=>'form-control','id'=>'password'] )  }}
                  </div>



                  <div class="form-group">
                    {{ Form::label('role', 'Roles', array('class' => 'control-label mb-1')) }}
                  
                    {{ Form::select('role[]',$roles,$selectedroles,['class'=>'myselect','data-placeholder'=>'Select Role(s)','multiple']) }}
                </div>







                      <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                          <i class="fa fa-lock fa-lg"></i>&nbsp;
                          <span id="payment-button-amount">Update</span>
                          <span id="payment-button-sending" style="display:none;">Sending…</span>
                      </button>
                  </div>
                  {!! Form::close() !!}
          </div>
      </div>

    </div>
</div> <!-- .card -->

        </div>
    </div>
@endsection
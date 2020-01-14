@if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                    
                    <il>{{$error}}</il>
                    
                    @endforeach
                </ul>
                
                </div>
            
            </div>
@endif
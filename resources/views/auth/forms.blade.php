<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Form</th>
        <th scope="col">Data</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $form)
        <tr>
            <th scope="row">1</th>
            <td>{{$form->name}}</td>
            <td>
                <table>
                    <thead>
                        <tr>
                            
                            $something = collect($form->fields);
                            
                            $something->each(function (String $user) {
                               foreach ($field as json_decode($user)){
                                   {{$field}}
                               }
                            })
                            
                            
                        </tr>
                      </thead>
                </table>   
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
<table class="table" style="border: 1px solid black;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Fields</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $form)
    
        <tr style="border: 1px solid black;">
            <th scope="row">{{$form->id}}</th>
            <td>{{$form->name}}</td>
            <td>
                <table>
                    <tbody>
                        @foreach(json_decode($form->fields, true) as $field => $value)                            
                        <tr>
                                @foreach($value as $a => $b)
                                <td>
                                    {{$a}} : {{$b}}
                                </td>
                                @endforeach
                                
                        </tr>
                        @endforeach
                      </tbody>
                </table>   
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
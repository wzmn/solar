<!DOCTYPE html>
<html>
<head>
    <title>New Form Submission</title>
</head>
<body>
    <h2>New Form Submission</h2>

    <p>A new form submission has been received for the form: <strong>{{ $formData->name }}</strong></p>

    <h3>Submitted Data:</h3>

    <table>
        <tbody>
            @foreach(json_decode($formData->fields, true) as $field => $value)                            
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
</body>
</html>

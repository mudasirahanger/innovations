<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF</title>
  </head>
  <body>
  @if ($datas)
               @foreach ($datas as $data)   
  <table width="100%">
       <tr><td><img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/ls.png"></td></tr>
       <tr><td><center><h1>Innovations</h1>#{{ $data['innovation_id'] }}</center></td></tr>
    </table>    
    <table width="100%" style="margin-top: 50px;">
      <tr><td> <h1 class="">
        {{ $data['heading_innovator'] }}
        <small style="font-size: 12px;">by {{ $data['name_innovator'] }}</small></td>
        <td style="border: 1px solid #DDDDDD;width:200px;height:200px"><img src="{{ asset('storage/app/'. $data['photo']) }}" class="" width="200px"> </td>
      </tr> 
    </table>
    <table width="100%" style="margin-top: 10px;">
      <tr>
        <td><b>University :  </b>{{ $uni_name }}</td>
        <td><b>Department :  </b>{{ $dept_name }}</td>
      </tr>
      <tr>
      <td><b>Patent No :  </b>{{ $data['patentno'] }}  <b>ID  :  </b>#{{ $data['innovation_id'] }}</td>
      <td><b>Status  :  </b>{{ $data['status'] }}</td>
      </tr>
    </table>


    <table width="100%" style="margin-top: 100px;">
        <tr>
            <td>{{ $data['about'] }}</td>
        </tr>
        <tr>
        <td> <img src="{{ asset('storage/app/'. $data['photo_innovation']) }}" class="" width="500px"> </td>
      </tr>
    </table>


     @endforeach
                @endif
   






   </body>
</html>
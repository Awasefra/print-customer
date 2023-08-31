<!DOCTYPE html>
<html lang="en">
    <head>
        


        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" /> --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- Styles -->
        <style>
            body {
                font-family: "Times New Roman";
            }
            header{
                position: fixed;
            }
            .grid-container {
            display: grid;
            grid-template-columns: 1fr 60px;
           
            }

            .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
            }
            /* @page {
                header: page-header;
                footer: page-footer;
            } */
            @page{
                /* padding-top: 0;
                margin-bottom: 1cm; */
                header: page-header;

                footer: page-footer;
            }
            @page:header{
                position: absolute;
            }
            @page:footer{
                position: absolute;
            }
    
            </style>

        
</head>
<body>     
    <htmlpageheader name="page-header" >
        <div class="fixed" style="padding-top: 5;">
            <table class="text-sm " style="width: 100%;border-bottom: 0.5px solid black;">
                <thead style="padding-top: 0; ">
                    <tr>
                        <td  style="width: 40%" class="text-center"><img src="kop_surat/logo.png" style="height:auto; width:50px;  " > 
                        </td> 
                        <td class=" text-center" style="width: 20%">
                        </td>
                        <td class=" w-5" style="width:40%; ">
                        </td>
                      </tr>
                </thead>
               
              </table>
        {{-- <div style="height: 50px; padding-top:0;" class="fixed">
            ajdjkladjkaljdajdlajkdlajdj
           
           <img src="kop_surat/logo-dasarata.jpg" style="display:flex; width: 90px; height:190px; float:right; padding-top:0;" >
       
        </div> --}}
        </div>
        
       
              
    </htmlpageheader>
    <htmlpagefooter name="page-footer">
        
       
            <table class="text-sm " style="width: 100%;border-top: 0.5px solid black;">
                <thead style="padding-top: 0; ">
                    <tr>
                        <td  style="width: 90%" class="text-center"> <p style="font-size: 8"> Terima Kasih Sudah Mempercayai Layanan Kami</p>
                        </td> 
                      
                        {{-- <td class=" w-5" style="width:40%; "><img src="kop_surat/logo.png" style="height:auto; width:60px; float:right; padding-left:20px;" >
                        </td> --}}
                      </tr>
                </thead>
               
              </table>
       
    </htmlpagefooter>
    {{-- if same barcode --}}
    @foreach ($customerProspects as $item)
         {{-- @for ($i = 1; $i <=$page; $i++) --}}
    <div>
        <table class="text-sm " style="width: 100%; ">
            <thead>
                <tr>
                    <td  style="width: 60%" style="padding-left:15px;"> <p style="font-size: 12; "><p> Nama : {{ $item['nama'] }}
                    </p> ID :   {{ $item['id'] }}   <p>No VA :</p></p>
                    </td> 
                    {{-- <td class=" text-center" style="width: 30%"><p style="font-size: 10">Id barang</p> --}}
                    </td>
                    <td style="width:40%; "><img style="padding-left:8px; padding-top:5px" src={!! substr($code, 38) !!}> <p style="font-size:8; padding-top: 10px">scan for more information</p>
                         
                        
                    </td>
                  </tr>
                  
            </thead>
           
          </table>
         
    
    
         
    
     
      
    </div>
    {{-- @endfor --}}
    @endforeach
   

    {{-- from array --}}
    {{-- @foreach($customerProspects as $value2) --}}
    {{-- @foreach($code as $value)
   
    <div>
        <table class="text-sm " style="width: 100%">
            <thead style="padding-top: 0;">
                <tr>
                    <td class="text-center"  style="width: 40%"> <p style="font-size: 10">{{ $value2->id }}</p>
                    </td> 
                    <td class=" text-center" style="width: 30%"><p style="font-size: 10">Id barang</p>
                    </td>
                    <td class=" w-5" style="width:30%"><div style="padding-left:20">{!! substr($value, 38) !!}</div>
                    </td>
                  </tr>
            </thead>
           
          </table>
    
    
         
    
     
      
    </div>
    @endforeach
    @endforeach --}}
    
    
    
    
         
    
     
      
   
    
 
      {{-- {!! $base64_encode = QrCode::encoding('UTF-8')size(200)->generate('http://google.com'); !!}
      <img src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->generate('http://google.com')) !!} "> --}}
     
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" data-auto-replace-svg="nest"></script> --}}
</html>
    
    
  


{{-- CREACION DE COMPONENTE DE ALERTA --}}

{{-- DIRECTIVA DE LEY PARA RECIBIR LOS PROPS  --}}

@props(["type"])

@php
  switch ($type) {
    case 'info':
      $class = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
      break;
    
      case 'danger':
      $class = "text-red-800  bg-red-50 dark:bg-gray-800 dark:text-red-400";
      break;

      case 'success':
      $class = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
      break;

      case 'warning':
      $class = "text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300";
      break;

      case 'dark':
      $class = "text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300";
      break;
      
    default:
      $class = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
      break;
  }
@endphp
{{-- PASAMOS LA CLASE --}}
<div class="p-4 mb-4 text-sm {{$class}} rounded-lg " role="alert">
    {{-- CREAMOS UNAS VARIABLE CON LAS LLAVES     definimos como null en caso de que no se le envie un valor--}}
    <span class="font-medium">{{$alertTittle ?? null}}</span> {{$alertContent}}
  </div>
@extends('layouts.app')

@section('content')
<style media="screen">
  .container{
    padding-top: 115px;
  }
</style>
  <div class="container col-10">
      <section class="row">
          @if (session()->get('user.cart'))
          <article class="col-12">
              <br>
              <section class="table-responsive">
                  <table class="table table-striped">
                      <thead>

                          <tr>
                              <th scope="col"> </th>
                              <th scope="col">Producto</th>
                              <th scope="col">Descripcion </th>

                              <th scope="col" class="text-center">Precio</th>
                              <th scope="col"></th>
                          </tr>
                      </thead>
                      <tbody>

                                                                                                                                                                                      @php
                                                                                                                                                                                      $total = 0;
                                                                                                                                                                                      @endphp
                          @foreach (session()->get('user.cart') as $product)

                                                                                                                                              @php
                                                                                                                                                  $total = $total + $product['precio']
                                                                                                                                              @endphp

                              <tr>
                                  <td><img src="" width="10%"/> </td>
                                  <td class="initialism">{{$product['nombre']}}</td>
                                  <td class="">{{$product['descripcion']}}</td>
                                  <td class="text-right">$ {{$product['precio']}}</td>
                              <td class="text-right"><a href='{{route('cart.remove', $product['id'])}}' class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                              </tr>


                          @endforeach

                      <tr>
                          <td></td>
                          <td></td>

                          <td><strong>Total</strong></td>
                          <td></td>
                          <td class="text-right" id="subtotal">$ {{$total}}   </td>
                          <td></td>

                      </tr>

                      <tr>
                          <td></td>
                          <td></td>



                          </tr>
                      </tbody>
                  </table>
              </section>
          </article>
          <section class="col mb-2">
              <article class="row">
                  <section class="col-sm-12  col-md-6">
                  <a href='/' class="btn btn-block btn-light">Continuar Comprando</a>
                  </section>
                  <section class="col-sm-12 col-md-6 text-right">
                      <button class="btn-comp btn btn-lg btn-block btn-success text-uppercase" data-toggle="modal" data-target="#exampleModalCenter">COMPRAR</button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Elige tu medio de pago</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body d-flex flex-column">
                              <h6 class="text-center"> El total de tu compra es: <br>
                                <strong>- $ {{$total}}</strong> -</h6>
                              <form class="" action="/gracias" method="get">
                                @csrf
                                @method('put')
                                <div class="">
                                  <img src="/storage/logomp.png" alt="mp" width="40">
                                  <input type="radio" name="pago" value="MP">
                                </div>
                                <div class="">
                                  <img src="/storage/logovisa.png" alt="" width="40">
                                  <input type="radio" name="pago" value="V">
                                </div>
                                <div class="">
                                  <img src="/storage/logomc.png" alt="" width="40">
                                  <input type="radio" name="pago" value="MC">
                                </div>
                                <div class="">
                                  <img src="/storage/banklogo.png" alt="" width="40">
                                  <input type="radio" name="pago" value="TR">
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button href="/gracias" type="submit" class="btn btn-primary">Proceder al pago</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </section>
              </article>
              <br>
          </section>

              @else
              <div class='container mb-5 mt-5'>
                  <h2 class='text-center mb-5 mt-5'> TU CARRITO SE ENCUENTRA VACÍO <i class="fas fa-frown"></i> </h2>
              </div>
              @endif

  </section>
  </div>


  <script src ="{{asset('js/cart.js')}}"></script>
  @endsection

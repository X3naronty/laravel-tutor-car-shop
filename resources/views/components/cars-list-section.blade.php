 <!-- New Cars -->
 <section>
     <div class="container">
         <h2>Latest Added Cars</h2>
         <div class="car-items-listing">
             @for ($i = 0; $i < 15; $i++)
                 <x-cars-list-item />
             @endfor
         </div>
     </div>
 </section>
 <!--/ New Cars -->

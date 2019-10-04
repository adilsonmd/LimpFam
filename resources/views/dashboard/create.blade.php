<div class="modal fade" id="saleModal" tabindex="-1" role="dialog" aria-labelledby="saleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="saleModalLabel">Nova venda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('createSale') }}" method="POST">
          <div class="form-group">
            <label for="product-name" class="col-form-label">Nome:</label>
            <select class="form-control" id="product-name" name="productId">
                <option>Selecione um Produto</option>
                <option value="1">Cloro</option>
                <option value="2">Candida</option>
                <option value="3">Desinfetante</option>
                <option value="4">Ajax</option>
                <option value="5">Maridão</option>
                <option value="6">Dínamo</option>
            </select>
          </div>
          
          <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="message-text" class="col-form-label">Quantidade</label>
                <input type="number" class="form-control" id="product-quantity" 
                    name="productQuantity" min="1" max="100">
            </div>
            <div class="form-group col-sm-6">
                <label for="message-text" class="col-form-label">Valor</label>
                <input type="text" class="form-control" id="product-value" 
                    name="productValue" readonly>
            </div>
            <script>
                function getValueByProduct(idProduct){
                    let value = 0;
                    switch (idProduct) {
                        case "1":
                            value = 3.8
                            break;
                        case "2":
                            value = 3.0;
                            break;
                        case "3":
                            value = 3.0;
                            break;
                        case "4":
                            value = 3.0;
                            break;
                        case "5":
                            value = 3.0;
                            break;
                        case "6":
                            value = 4.0;
                            break;
                        default:
                            value = 0;
                            break;
                    }
                    return value;
                }
                var produto = document.getElementById("product-name");
                var valor = document.getElementById("product-value");
                
                produto.addEventListener('change', (event) => {
                    var quantidade = document.getElementById("product-quantity");
                    valor.value = `${getValueByProduct(produto.value) * quantidade.value}`;
                    quantidade.addEventListener('change', (ev) => {
                        valor.value = `${getValueByProduct(produto.value) * quantidade.value}`;
                    });
                    
                });

                
            </script>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-secondary">Criar</button>
          </div>

        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      -->
    </div>
  </div>
</div>
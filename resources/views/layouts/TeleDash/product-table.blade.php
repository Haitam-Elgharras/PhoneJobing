<div class="card shadow border-0 table-wrapper table-responsive"
    style="padding-top: 0.8rem; padding-left:1rem; padding-right:1rem; padding-bottom:1rem;">
    <div class="h3 mt-2 mb-4 d-flex drop-shadow" style="justify-content: center">Produits</div>

    <table class="table user-table table-hover align-items-center" id="productTable" style="table-layout: fixed;">
        <thead>
            <tr>
                <th class="border-bottom drop-shadow" style=" padding-left:1.8rem;">Produit</th>
                <th class="border-bottom drop-shadow" style=" padding-left:2.9rem;">Prix</th>
                <th class="border-bottom drop-shadow" style=" padding-left:2.8rem;">Quantité</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td><a class="fw-bold drop-shadow" style="cursor: default;">
                            <?php
                            if (strlen($product->name) > 16) {
                                echo substr(ucwords($product->name), 0, 13) . '...';
                            } else {
                                echo ucwords($product->name);
                            }
                            ?>

                    </td>
                    <td><span class="fw-normal d-flex drop-shadow">
                            {{ $product->price }} DH
                        </span>
                    </td>
                    <td><span class="fw-normal d-flex drop-shadow" style=" padding-left:2.35rem;">
                            {{ $product->quantity }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

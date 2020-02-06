@foreach($attributes as $attribute)
                                                    @php echo($attribute) @endphp
                                                        @php $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray()) @endphp
                                                        @php echo($product->attributes->pluck('attribute_id')) @endphp



                                                        @php
                                                            if ($product->$attributes->count() > 0) {
                                                                $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray())
                                                            } else {
                                                                $attributeCheck = [];
                                                            }




                                                            if($product->$attributes->count() > 0) {
                               $$attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray());

                        } elseif($product->$attributes->count() <= 0){
                            $attributeCheck = [];
                            }







                            if(count((array)$product->$attributes) > 0) {
                                                        print('yes');
                               $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray());

                        } elseif(count((array)$product->$attributes) <= 0){
                            print('no');
                            $attributeCheck = [];

                            }






                            @php
                                                        print($attributes);
                                                        if(count((array)$product->$attribute) > 0) {
                                                        print('yes');
                                                        $attributeCheck = in_array($attribute->id, (array)$product->attributes->pluck('attribute_id')->toArray());

                                                        } elseif(count((array)$product->$attribute) <= 0){
                                                        print('no');
                                                        print(count((array)$product->$attribute));
                                                        $attributeCheck = [];
                                                        }
                                                        @endphp
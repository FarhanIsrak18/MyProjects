using BLL.Entities;
using DAL.DataAccessFactory;
using DAL.EF;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Services.ProductManagerServices
{
    public class PorductServices
    {
        public static List<ProductModel>Get()
        {
            var data = DataAccessFactory.ProductDataAccess().Get();
            var products = new List<ProductModel>();
            foreach(var item in data)
            {
                products.Add(new ProductModel() { 
                    id=item.id,
                    weight_unit=item.weight_unit,
                    dimention=item.dimention,
                    selling_price=item.selling_price,
                    status_sale=item.status_sale,
                    stock=item.stock,
                    status_purchase=item.status_purchase,
                    dimention_unit=item.dimention_unit,
                    product_description=item.product_description,
                    product_condition=item.product_condition,
                    product_name=item.product_name,
                    tax=item.tax,
                    warehouse_name=item.warehouse_name,
                    weight=item.weight,
                    nature=item.nature
                });
            }
            return products;
        }
        public static ProductModel Get(int id)
        {
            var item = DataAccessFactory.ProductDataAccess().Get(id);
            if(item!=null)
            {
                var product = new ProductModel()
                {
                    id = item.id,
                    weight_unit = item.weight_unit,
                    dimention = item.dimention,
                    selling_price = item.selling_price,
                    status_sale = item.status_sale,
                    stock = item.stock,
                    status_purchase = item.status_purchase,
                    dimention_unit = item.dimention_unit,
                    product_description = item.product_description,
                    product_condition = item.product_condition,
                    product_name = item.product_name,
                    tax = item.tax,
                    warehouse_name = item.warehouse_name,
                    weight = item.weight,
                    nature = item.nature
                };
                return product;
            }
            return null;
        }
        public static bool Create(ProductModel item)
        {
            var product = new Product()
            {
                weight_unit = item.weight_unit,
                dimention = item.dimention,
                selling_price = item.selling_price,
                status_sale = item.status_sale,
                stock = item.stock,
                status_purchase = item.status_purchase,
                dimention_unit = item.dimention_unit,
                product_description = item.product_description,
                product_condition = item.product_condition,
                product_name = item.product_name,
                tax = item.tax,
                warehouse_name = item.warehouse_name,
                weight = item.weight,
                nature = item.nature
            };
            return DataAccessFactory.ProductDataAccess().Create(product);
        }
        public static bool Update(ProductModel item)
        {
            var product = new Product()
            {
                id = item.id,
                weight_unit = item.weight_unit,
                dimention = item.dimention,
                selling_price = item.selling_price,
                status_sale = item.status_sale,
                stock = item.stock,
                status_purchase = item.status_purchase,
                dimention_unit = item.dimention_unit,
                product_description = item.product_description,
                product_condition = item.product_condition,
                product_name = item.product_name,
                tax = item.tax,
                warehouse_name = item.warehouse_name,
                weight = item.weight,
                nature = item.nature
            };
            return DataAccessFactory.ProductDataAccess().Update(product);
        }

        public static bool Delete(int id)
        {
            return DataAccessFactory.ProductDataAccess().Delete(id);
        }

        public static List<object> GetChartData()
        {
            var data = DataAccessFactory.ProductDataAccess().Get();
            List<object> products = new List<object>();
            products.Add(new object[]
                       {
                            "Product Name", "Product Stock"
                       });
            foreach (var product in data)
            {
                products.Add(new object[]
                        {
                            product.product_name, product.stock
                        });
            }
            return products;
        }

       public static ListedProductModel GetListedProduct()
       {
            var products = DataAccessFactory.ProductDataAccess().Get();
            var max_stocked_product = "";
            float max_stocked = -1;
            var most_expensive_product = "";
            float most_expensive = -1;
            var good_product_count = 0;
            var faulty_product_count = 0;

            foreach (var product in products)
            {
                if (product.stock > max_stocked)
                {
                    max_stocked = (float)product.stock;
                    max_stocked_product = product.product_name;
                }
                if (product.selling_price > most_expensive)
                {
                    most_expensive = (float)product.selling_price;
                    most_expensive_product = product.product_name;
                }
                if (product.product_condition.Equals("good"))
                {
                    good_product_count++;
                }
                if (product.product_condition.Equals("faulty"))
                {
                    faulty_product_count++;
                }

            }
            var info = new ListedProductModel
            {
                max_stocked = max_stocked,
                max_stocked_product = max_stocked_product,
                most_expensive = most_expensive,
                most_expensive_product = most_expensive_product,
                good_product_count = good_product_count,
                faluty_product_count = faulty_product_count
            };
            return info;
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class ProductModel
    {
        public int id { get; set; }
        public string product_name { get; set; }
        public string status_sale { get; set; }
        public string status_purchase { get; set; }
        public string product_description { get; set; }
        public string warehouse_name { get; set; }
        public Nullable<double> stock { get; set; }
        public string nature { get; set; }
        public string weight { get; set; }
        public string weight_unit { get; set; }
        public string dimention { get; set; }
        public string dimention_unit { get; set; }
        public Nullable<double> selling_price { get; set; }
        public string tax { get; set; }
        public string product_image { get; set; }
        public string product_condition { get; set; }
        public string date_added { get; set; }
        public string last_updated { get; set; }
    }
}

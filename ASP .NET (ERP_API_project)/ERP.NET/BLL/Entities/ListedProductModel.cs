using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class ListedProductModel
    {
        public string max_stocked_product { get; set; }
        public float max_stocked { get; set; }
        public float most_expensive { get; set; }
        public string most_expensive_product { get; set; }
        public int good_product_count { get; set; }
        public int faluty_product_count { get; set; }
    }
}

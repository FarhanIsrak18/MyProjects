using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Entities
{
    public class WarehouseModel
    {
        public int id { get; set; }
        public string name { get; set; }
        public string description { get; set; }
        public string address { get; set; }
        public Nullable<int> zip_code { get; set; }
        public string city { get; set; }
        public string country { get; set; }
        public string phone { get; set; }
        public Nullable<double> quantity { get; set; }
        public Nullable<double> remaining_quantity { get; set; }
        public string status { get; set; }
        public string date_added { get; set; }
        public string date_updated { get; set; }
    }
}

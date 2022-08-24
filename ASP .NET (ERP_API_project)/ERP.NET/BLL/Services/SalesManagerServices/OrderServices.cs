using BLL.Entities;
using DAL.DataAccessFactory;
using DAL.EF;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Services.SalesManagerServices
{
    public class OrderServices
    {
        public static List<OrderModel> Get()
        {
            var data = DataAccessFactory.OrderDataAccess().Get();
            var orders = new List<OrderModel>();
            foreach (var item in data)
            {
                orders.Add(new OrderModel()
                {
                    id = item.id,
                    customer_id = item.customer_id,
                    order_description = item.order_description,
                    status = item.status,
                    order_made = item.order_made,
                    total_amount = item.total_amount,
                    delivered_on = item.delivered_on,
                    type = item.type

                });
            }
            return orders;
        }

        public static bool Create(OrderModel item)
        {
            var order = new Order()
            {
                //id = item.id,
                customer_id = item.customer_id,
                order_description = item.order_description,
                status = item.status,
                order_made = item.order_made,
                total_amount = item.total_amount,
                delivered_on = item.delivered_on,
                type = item.type
            };
            return DataAccessFactory.OrderDataAccess().Create(order);
        }

        public static OrderModel Get(int id)
        {
            var item = DataAccessFactory.OrderDataAccess().Get(id);
            if (item != null)
            {
                var order = new OrderModel()
                {
                    id = item.id,
                    customer_id = item.customer_id,
                    order_description = item.order_description,
                    status = item.status,
                    order_made = item.order_made,
                    total_amount = item.total_amount,
                    delivered_on = item.delivered_on,
                    type = item.type
                };
                return order;
            }
            return null;
        }

        public static bool Delete(int id)
        {
            return DataAccessFactory.OrderDataAccess().Delete(id);
        }

        public static bool Update(OrderModel item)
        {
            var order = new Order()
            {
                id = item.id,
                customer_id = item.customer_id,
                order_description = item.order_description,
                status = item.status,
                order_made = item.order_made,
                total_amount = item.total_amount,
                delivered_on = item.delivered_on,
                type = item.type
            };
            return DataAccessFactory.OrderDataAccess().Update(order);
        }
    }
}

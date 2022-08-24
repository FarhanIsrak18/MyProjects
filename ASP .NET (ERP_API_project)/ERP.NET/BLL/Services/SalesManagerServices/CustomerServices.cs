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
    public class CustomerServices
    {
        public static List<CustomerModel> Get()
        {
            var data = DataAccessFactory.CustomerworkDataAccess().Get();
            var customers = new List<CustomerModel>();
            foreach (var item in data)
            {
                customers.Add(new CustomerModel()
                {
                    id = item.id,
                    name = item.name,
                    email = item.email,
                    phone = item.phone,
                    delivery_point = item.delivery_point,
                    first_purchase = item.first_purchase,
                    type =item.type

                });
            }
            return customers;
        }
        public static bool Create(CustomerModel item)
        {
            var customer = new Customer()
            {
                //id = item.id,
                name = item.name,
                email = item.email,
                phone = item.phone,
                delivery_point = item.delivery_point,
                first_purchase = item.first_purchase,
                type = item.type
            };
            return DataAccessFactory.CustomerworkDataAccess().Create(customer);
        }

        public static CustomerModel Get(int id)
        {
            var item = DataAccessFactory.CustomerworkDataAccess().Get(id);
            if (item != null)
            {
                var customer = new CustomerModel()
                {
                    id = item.id,
                    name = item.name,
                    email = item.email,
                    phone = item.phone,
                    delivery_point = item.delivery_point,
                    first_purchase = item.first_purchase,
                    type = item.type
                };
                return customer;
            }
            return null;
        }

        public static bool Delete(int id)
        {
            return DataAccessFactory.CustomerworkDataAccess().Delete(id);
        }

        public static bool Update(CustomerModel item)
        {
            var customer = new Customer()
            {
                id = item.id,
                name = item.name,
                email = item.email,
                phone = item.phone,
                delivery_point = item.delivery_point,
                first_purchase = item.first_purchase,
                type = item.type
            };
            return DataAccessFactory.CustomerworkDataAccess().Update(customer);
        }
    }

}

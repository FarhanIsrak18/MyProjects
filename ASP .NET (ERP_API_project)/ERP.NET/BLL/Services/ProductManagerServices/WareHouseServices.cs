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
    public class WareHouseServices
    {
        public static List<WarehouseModel> Get()
        {
            var data = DataAccessFactory.WareHouseDataAccess().Get();
            var warehouses = new List<WarehouseModel>();
            foreach (var item in data)
            {
                warehouses.Add(new WarehouseModel()
                {
                    id = item.id,
                    name = item.name,
                    phone = item.phone,
                    quantity = item.quantity,
                    remaining_quantity = item.remaining_quantity,
                    status = item.status,
                    zip_code = item.zip_code,
                    description = item.description,
                    country = item.country,
                    city = item.city,
                    address = item.address
                });
            }
            return warehouses;
        }
        public static WarehouseModel Get(int id)
        {
            var item = DataAccessFactory.WareHouseDataAccess().Get(id);
            if (item != null)
            {
                var warehouse=new WarehouseModel()
                {
                    id = item.id,
                    name = item.name,
                    phone = item.phone,
                    quantity = item.quantity,
                    remaining_quantity = item.remaining_quantity,
                    status = item.status,
                    zip_code = item.zip_code,
                    description = item.description,
                    country = item.country,
                    city = item.city,
                    address = item.address
                };
                return warehouse;
            }
            return null;
        }
        public static bool Create(WarehouseModel item)
        {
            var obj = new Warehouse()
            {
                name = item.name,
                phone = item.phone,
                quantity = item.quantity,
                remaining_quantity = item.remaining_quantity,
                status = item.status,
                zip_code = item.zip_code,
                description = item.description,
                country = item.country,
                city = item.city,
                address = item.address
            };
            return DataAccessFactory.WareHouseDataAccess().Create(obj);
        }
        public static bool Update(WarehouseModel item)
        {
            var obj = new Warehouse()
            {
                id = item.id,
                name = item.name,
                phone = item.phone,
                quantity = item.quantity,
                remaining_quantity = item.remaining_quantity,
                status = item.status,
                zip_code = item.zip_code,
                description = item.description,
                country = item.country,
                city = item.city,
                address = item.address
            };
            return DataAccessFactory.WareHouseDataAccess().Update(obj);
        }

        public static bool Delete(int id)
        {
            return DataAccessFactory.WareHouseDataAccess().Delete(id);
        }

        public static WarehouseModel GetByName(string name)
        {
            var item = DataAccessFactory.WareHouseDataAccessName().GetByName(name);
            if (item != null)
            {
                var warehouse = new WarehouseModel()
                {
                    id = item.id,
                    name = item.name,
                    phone = item.phone,
                    quantity = item.quantity,
                    remaining_quantity = item.remaining_quantity,
                    status = item.status,
                    zip_code = item.zip_code,
                    description = item.description,
                    country = item.country,
                    city = item.city,
                    address = item.address
                };
                return warehouse;
            }
            return null;
        }
    }
}

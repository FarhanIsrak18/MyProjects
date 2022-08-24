using DAL.EF;
using DAL.Interfaces.Common;
using DAL.Interfaces.ProductManager;
using DAL.Repo.ProductManagerRepo;
using DAL.Repo.SalesManagerRepo;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.DataAccessFactory
{
    public class DataAccessFactory
    {
        static ERPEntities db = new ERPEntities();
        public static IRepo<Product, int, bool> ProductDataAccess()
        {
            return new ProductRepo(db);
        }

        public static IRepo<Warehouse, int, bool> WareHouseDataAccess()
        {
            return new WareHouseRepo(db);
        }

        public static IWarehouse<Warehouse,string> WareHouseDataAccessName()
        {
            return new WareHouseRepo(db);
        }

        public static IRepo<Issue, int, bool> ProductManagerIssueDataAccess()
        {
            return new IssueRepo(db);
        }

               
        //sales
        public static IRepo<Customer, int, bool> CustomerworkDataAccess()
        {
            return new CustomerRepo(db);
        }
        public static IRepo<Order, int, bool> OrderDataAccess()
        {
            return new OrderRepo(db);
        }
        public static IRepo<User, int, bool> SalesManagerProfileDataAccess()
        {
            return new ProfileRepo(db);
        }
    }
}

using BLL.Entities;
using BLL.Services.ProductManagerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Http.Cors;

namespace PL.Controllers.ProductManagerController
{
    [EnableCors("*", "*", "*")]
    public class WareHouseController : ApiController
    {
        [Route("api/warehouses")]
        [HttpGet]
        public HttpResponseMessage GetAll()
        {
            var data = WareHouseServices.Get();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/warehouse/create")]
        [HttpPost]
        public HttpResponseMessage Create(WarehouseModel warehouse)
        {
            var data = WareHouseServices.Create(warehouse);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/warehouse/{id}")]
        [HttpGet]
        public HttpResponseMessage Get(int id)
        {
            var data = WareHouseServices.Get(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/warehouse/delete/{id}")]
        [HttpGet]
        public HttpResponseMessage Delete(int id)
        {
            var data = WareHouseServices.Delete(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/warehouse/update")]
        [HttpPost]
        public HttpResponseMessage Update(WarehouseModel warehouse)
        {
            var data = WareHouseServices.Update(warehouse);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/warehouse/ByName/{name}")]
        [HttpGet]
        public HttpResponseMessage GetByName(string name)
        {
            var data = WareHouseServices.GetByName(name);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
    }
}

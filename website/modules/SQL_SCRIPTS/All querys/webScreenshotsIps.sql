USE [webSite]
GO
/****** Object:  Table [dbo].[webScreenshotsIps]    Script Date: 09/03/2010 00:32:16 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[webScreenshotsIps](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[login] [varchar](10) NULL,
	[ip] [varchar](15) NOT NULL,
	[timestamp] [int] NOT NULL
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
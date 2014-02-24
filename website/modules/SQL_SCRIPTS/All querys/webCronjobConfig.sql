USE [webSite]
GO
DROP TABLE [dbo].[webCronjobConfig]
GO
/****** Object:  Table [dbo].[webCronjobConfig]    Script Date: 05/11/2010 19:22:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[webCronjobConfig](
	[execute] [bit] NOT NULL,
	[lastExecution] [bigint] NOT NULL CONSTRAINT [DF_webCronjobConfig_lastExecution]  DEFAULT ((0))
) ON [PRIMARY]
